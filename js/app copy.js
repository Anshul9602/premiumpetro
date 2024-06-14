console.log('here!')

function showAlert(msg) {
    let alertBox = `<div class="bg-success" id="show-alert" style="padding:10px; display:none;"><span>${msg}</span><i class="fa fa-close pull-right text-white"></i></div>`
    $('.content').prepend(alertBox);
    $("#show-alert").fadeIn();
    setTimeout(function () {
        $("#show-alert").fadeOut(function () {
            $("#show-alert").remove();
        });
    }, 8000);
    $("#show-alert").find(".fa").click(function () {
        $("#show-alert").remove();
    })
}

$("#image, #new-image").change(function () {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['image/jpeg', 'image/png', 'image/jpg'];
    if (!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))) {
        $(this).next().text('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        $(this).val('');
        return false;
    }
    else {
        $(this).next().removeClass();
        $(this).next().addClass('text-secondary');
        $(this).next().text(file.name);
    }
});

$(".open-modal").click(function (e) {
    $(".error-message").text('')
    $(".form-error-message").text('')
    e.preventDefault()
    $("#modal-form").fadeIn();
    $('input[name="company_name"]').parent().parent().parent().parent().hide();
})

$(".close-modal").click(function (e) {
    e.preventDefault()
    $("#modal-form").find("form").trigger("reset")
    $("#modal-form").find("input").blur();
    $("#modal-form").find("button[type='submit']").show()
    $("#loading-image").hide()
    $("#modal-form").fadeOut();
    $(".error-message").text('')
    $(".form-error-message").text('')
})

$('#add-post-form').submit(function (e) {
    $(".error-message").text('')
    e.preventDefault()
    tinyMCE.triggerSave(true, true);
    console.log('btn clicked')
    var call_api = 0;
    $.each($("#add-post-form input"), function () {
        if ($(this).val() == "" || $.trim($(this).val()).length == 0) {
            call_api = 1;
            $(this).focus();
            $(this).next().text(`Invalid or empty ${$(this).attr("name")}`)
            return false;
        }
        else {
            $(this).blur();
        }
    })

    if (call_api == 0) {
        $.ajax({
            type: "POST",
            url: "addpost",
            data: new FormData(document.getElementById("add-post-form")),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#save-post").hide();
                $("#loading-image").show()
            },
            success(data) {
                console.log(data);
                if (data.error != 1) {
                    $(".error-message").text('')
                    $(".form-error-message").text('')
                    $("#add-post-form").trigger("reset");
                    $("#save-post").show();
                    $("#loading-image").hide()
                    $("#modal-form").fadeOut();
                    console.log(data.msg)
                    let elm = '<div>' + data.details.content + '</div>';
                    let newRow = `<tr data-id='${data.details.id}' style="display:none">
                <td>${parseInt($("tbody").find("tr:last").children("td:first").text()) ? parseInt($("tbody").find("tr:last").children("td:first").text()) + 1 : 1}</td>
                <td>${data.details.heading.substring(0, 150)}...</td>
                <td>${$(elm).text().substring(0, 150)}...</td>
                <td>${data.details.date}</td>
                <td> <a class='open-class-edit-modal' data-id='${data.details.id}'  data-toggle='tooltip' data-placement='top' title='Edit Post'>
                <button class='btn btn-info'>
                  <li class='fa fa-pencil'></li>
                </button>
              </a>

              <a class='open-delete-modal' data-id='${data.details.id}' data-tname='blogposts' data-name='Post' data-link='removerow'   data-toggle='tooltip' data-placement='top' title='Delete Post'>
                <button class='btn btn-danger'>
                  <li class='fa fa-trash'></li>
                </button>
              </a></td>
                </tr>`
                    $("tbody").append(newRow);
                    $("tbody").find("tr[data-id='" + data.details.id + "']").fadeIn();

                    $('.open-edit-modal').click(function (e) {
                        e.preventDefault()
                        $(".error-message").text('')
                        $(".form-error-message").text('')

                        $(".form-error-message").text('')
                        $(".error-message").text('')
                        e.preventDefault()
                        $.ajax({
                            type: "GET",
                            url: 'updatepost',
                            data: { id: $(this).data('id') },
                            dataType: 'json',
                            beforeSend: function () {
                                $("#edit-post").hide();
                                $("#edit-post-form").find("#loading-image").show()
                            },
                            success(data) {
                                console.log(data)
                                if (data.error == 0) {
                                    $(".error-message").text('')
                                    $(".form-error-message").text('')
                                    $("#edit-post").show();
                                    $("#edit-post-form").find("#loading-image").hide()
                                    console.log(data)
                                    $('#post-id').val(data.id)
                                    $('#post-heading').val(data.heading)
                                    $('#post-author').val(data.author)
                                    $('#post-date').val(data.date)
                                    $('#post-meta_title').val(data.meta_title)
                                    $('#post-meta_desc').val(data.meta_desc)
                                    $('#post-content').val(data.content)
                                    $('#post-image').attr('src', '../' + data.image)
                                }
                                else {
                                    $("#edit-post-form").find('.form-error-message').text('An Error occured')
                                }
                            },
                            error(jQxhr, textStatus, errorThrown) {
                                console.log(errorThrown)
                                $("#edit-post-form").find('.form-error-message').text('Unable to connect at the moment')
                            }
                        })

                        $("#modal-edit-form").fadeIn();
                    })

                    $('.open-delete-modal').click(function (e) {
                        e.preventDefault()
                        console.log('delete modal')
                        $(".error-message").text('')
                        $(".form-error-message").text('')
                        $("#delete-item").data("link", $(this).data("link"))
                        $("#delete-item").data("id", $(this).data("id"))
                        $("#delete-item").data("tname", $(this).data("tname"))
                        $("#delete-item").data("name", $(this).data("name"))
                        $("#delete-modal").find(".form-error-message").text('')
                        $("#delete-modal").fadeIn()
                    })










                    showAlert(data.msg)
                } else {
                    $("#save-post").show();
                    $("#loading-image").hide()
                    $('.form-error-message').text(data.msg);
                }

            },
            error(jQxhr, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log("Error, request unsuccessful");
                $('.form-error-message').text("Unable to connect at the moment.");
            }
        })
    }

})

$('.open-edit-modal').click(function (e) {
    e.preventDefault()
    $(".error-message").text('')
    $(".form-error-message").text('')

    $(".form-error-message").text('')
    $(".error-message").text('')
    e.preventDefault()
    $.ajax({
        type: "GET",
        url: 'updatepost',
        data: { id: $(this).data('id') },
        dataType: 'json',
        beforeSend: function () {
            $("#edit-post").hide();
            $("#edit-post-form").find("#loading-image").show()
        },
        success(data) {
            console.log(data)
            if (data.error == 0) {
                $(".error-message").text('')
                $(".form-error-message").text('')
                $("#edit-post").show();
                $("#edit-post-form").find("#loading-image").hide()
                console.log(data)
                $('#post-id').val(data.id)
                $('#post-heading').val(data.heading)
                $('#post-author').val(data.author)
                $('#post-date').val(data.date)
                $('#post-meta_title').val(data.meta_title)
                $('#post-meta_desc').val(data.meta_desc)
                $('#post-content').val(data.content)
                $('#post-image').attr('src', '../' + data.image)
                tinyMCE.get('post-content').setContent(data.content);
            }
            else {
                $("#edit-post-form").find('.form-error-message').text('An Error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $("#edit-post-form").find('.form-error-message').text('Unable to connect at the moment')
        }
    })

    $("#modal-edit-form").fadeIn();
})

$('.open-delete-modal').click(function (e) {
    e.preventDefault()
    console.log('delete modal')
    $(".error-message").text('')
    $(".form-error-message").text('')
    $("#delete-item").data("link", $(this).data("link"))
    $("#delete-item").data("id", $(this).data("id"))
    $("#delete-item").data("tname", $(this).data("tname"))
    $("#delete-item").data("name", $(this).data("name"))
    $("#delete-modal").find(".form-error-message").text('')
    $("#delete-modal").fadeIn()
})

$("#delete-item").click(function (e) {
    e.preventDefault();
    $(".error-message").text('')
    $(".form-error-message").text('')
    let id = $(this).data("id");
    console.log(id)
    $.ajax({
        type: "GET",
        url: $(this).data('link'),
        data: { id: $(this).data('id'), tname: $(this).data('tname'), name: $(this).data('name') },
        dataType: 'json',
        success(data) {
            console.log(data)
            $(".error-message").text('')
            $(".form-error-message").text('')
            if (data.error == 0) {
                $("tbody").find("tr[data-id='" + id + "']").fadeOut(function () {
                    $("tbody").find("tr[data-id='" + id + "']").remove();
                })
                showAlert(data.msg);
                $('.close-delete-modal').trigger("click");
            }
            else {
                $("#delete-modal").find('.form-error-message').text('An Error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $("#delete-modal").find('.form-error-message').text('Unable to connect at the moment')
        }
    })
})

$('.close-delete-modal').click(function (e) {
    e.preventDefault()
    $(".error-message").text('')
    $(".form-error-message").text('')
    console.log('delete modal close')
    $("#delete-item").data("link", "")
    $("#delete-item").data("id", "")
    $("#delete-modal").fadeOut()
})


$('#edit-post-form').submit(function (e) {
    $(".error-message").text('')
    e.preventDefault()
    tinyMCE.triggerSave(true, true);
    console.log('btn clicked')
    var call_api = 0;
    $.each($("#edit-post-form input"), function () {
        if ($(this).attr('type') == 'file') {
            return;
        }
        if ($(this).val() == "" || $.trim($(this).val()).length == 0) {
            call_api = 1;
            $(this).focus();
            $(this).next().text(`Invalid or empty ${$(this).attr("name")}`)
            return false;
        }
        else {
            $(this).blur();
        }
    })


    if (call_api == 0) {
        $.ajax({
            type: "POST",
            url: "updatepost",
            data: new FormData(document.getElementById("edit-post-form")),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#edit-post").hide();
                $("#edit-post-form").find("#loading-image").show()
            },
            success(data) {
                console.log(data);
                if (data.error != 1) {
                    $(".error-message").text('')
                    $(".form-error-message").text('')
                    $("#edit-post-form").trigger("reset");
                    $("#edit-post").show();
                    $("#edit-post-form").find("#loading-image").hide()
                    $("#modal-edit-form").fadeOut();
                    console.log(data)
                    let elm = '<div>' + data.details.content + '</div>';
                    let newRow = `<td>${$("tbody").find("tr[data-id='" + data.details.id + "']").children("td:first").text()}</td>
                    <td>${data.details.heading.substring(0, 150)}...</td>
                    <td>${$(elm).text().substring(0, 150)}...</td>
                    <td>${data.details.date}</td>
                    <td> <a class='open-class-edit-modal' data-id='${data.details.id}'  data-toggle='tooltip' data-placement='top' title='Edit Post'>
                    <button class='btn btn-info'>
                      <li class='fa fa-pencil'></li>
                    </button>
                  </a>
    
                  <a class='open-delete-modal' data-id='${data.details.id}' data-tname='posts' data-name='Post' data-link='removerow'   data-toggle='tooltip' data-placement='top' title='Delete Post'>
                    <button class='btn btn-danger'>
                      <li class='fa fa-trash'></li>
                    </button>
                  </a></td>`
                    $("tbody").find("tr[data-id='" + data.details.id + "']").html(newRow);




                    $('.open-edit-modal').click(function (e) {
                        e.preventDefault()
                        $(".error-message").text('')
                        $(".form-error-message").text('')

                        $(".form-error-message").text('')
                        $(".error-message").text('')
                        e.preventDefault()
                        $.ajax({
                            type: "GET",
                            url: 'updatepost',
                            data: { id: $(this).data('id') },
                            dataType: 'json',
                            beforeSend: function () {
                                $("#edit-post").hide();
                                $("#edit-post-form").find("#loading-image").show()
                            },
                            success(data) {
                                console.log(data)
                                if (data.error == 0) {
                                    $(".error-message").text('')
                                    $(".form-error-message").text('')
                                    $("#edit-post").show();
                                    $("#edit-post-form").find("#loading-image").hide()
                                    console.log(data)
                                    $('#post-id').val(data.id)
                                    $('#post-heading').val(data.heading)
                                    $('#post-author').val(data.author)
                                    $('#post-date').val(data.date)
                                    $('#post-meta_title').val(data.meta_title)
                                    $('#post-meta_desc').val(data.meta_desc)
                                    $('#post-content').val(data.content)
                                    $('#post-image').attr('src', '../' + data.image)
                                }
                                else {
                                    $("#edit-post-form").find('.form-error-message').text('An Error occured')
                                }
                            },
                            error(jQxhr, textStatus, errorThrown) {
                                console.log(errorThrown)
                                $("#edit-post-form").find('.form-error-message').text('Unable to connect at the moment')
                            }
                        })

                        $("#modal-edit-form").fadeIn();
                    })

                    $('.open-delete-modal').click(function (e) {
                        e.preventDefault()
                        console.log('delete modal')
                        $(".error-message").text('')
                        $(".form-error-message").text('')
                        $("#delete-item").data("link", $(this).data("link"))
                        $("#delete-item").data("id", $(this).data("id"))
                        $("#delete-item").data("tname", $(this).data("tname"))
                        $("#delete-item").data("name", $(this).data("name"))
                        $("#delete-modal").find(".form-error-message").text('')
                        $("#delete-modal").fadeIn()
                    })


                    showAlert(data.msg);
                } else {
                    $("#edit-post").show();
                    $("#edit-post-form").find("#loading-image").hide()
                    $('.form-error-message').text(data.msg);
                }

            },
            error(jQxhr, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log("Error, request unsuccessful");
                $("#edit-post").show();
                $("#edit-post-form").find("#loading-image").hide()
                $('.form-error-message').text("Unable to connect at the moment.");
            }
        })
    }

})

$(".close-edit-modal").click(function (e) {
    e.preventDefault()
    $(".error-message").text('')
    $(".form-error-message").text('')
    $("#modal-edit-form").find("form").trigger("reset")
    //$("#modal-edit-form").find("input[type='checkbox']").prop("checked",false)
    $("#modal-edit-form").find("button[type='submit']").show()
    $("#loading-image").hide()
    $(".error-message").text('')
    $(".form-error-message").text('')
    $("#modal-edit-form").fadeOut();
})

///////////////////////////////////////////////////