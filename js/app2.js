// Validate Image


$("#profile_card,#research_card,#speciality_card,#media_card,#department_icon",).change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        $(this).next().text('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        $(this).val('');
        return false;
    }
    else
    {   
        $(this).next().removeClass();
        $(this).next().addClass('text-secondary');
        $(this).next().text(file.name);
    }
});

function validateImage(image) {
    var file = image.files[0];
    var fileType = file.type;
    var match = ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        image.next().text('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        image.val('');
        return false;
    }
    else
    {   
        image.next().removeClass();
        image.next().addClass('text-secondary');
        image.next().text(file.name);
    }
}



// Validate Number

function validateNumber(text){
    text.val($.trim(text.val()));
    if (!/^[0-9]+$/.test(text.val())){
        text.next().text(text.prev().text() + ' must contain only numbers.');
        return false
    }
    else{
        text.next().text('');
        return true
    }
}

// Validate Text

function validateText(text){
    text.val($.trim(text.val()));
    if (!/^[a-zA-Z][a-zA-Z ]*$/.test(text.val())){
        text.next().text(text.prev().text() + ' must contain only letters.');
        return false
    }
    else{
        text.next().text('');
        return true
    }
}

// Validate Email

function validateEmail(text){
    text.val($.trim(text.val()));
    if (!/^[^@]+@[^\.]+\..+$/.test(text.val())){
        text.next().text('Invalid Email');
        return false
    }
    else{
        text.next().text('');
        return true
    }
}

// validate description

function validateDescription(text){
    text.val($.trim(text.val()));
    console.log(text.val())
    if (/^.*[@$%^*].*$/.test(text.val()) || text.val() == ''){
        text.next().text(text.prev().text() + ' has invalid characters.');
        return false
    }
    else{
        text.next().text('');
        return true
    }
}

function validateEditor(text){
    text = $.trim(text)
    console.log(text + 'check!!!')
    if (/^.*[@$%^*].*$/.test(text) || text == ''){
        $('.editor-error').text(' has invalid characters or is empty.');
        return false
    }
    else{
        $('.editor-error').text('');
        return true
    }
}

$(".add-new-doctor-btn").click(function(e){
    e.preventDefault();

    console.log("Hello inside");
    if (validateDescription($('#full_name')) && validateEmail($('#email')) && validateText($('#department')) && validateEditor(tinyMCE.activeEditor.getContent()))
    {
        $("#doctor-form").submit();
    }
    
})

$(".add-new-notification-btn").click(function(e){
    e.preventDefault();
    // $("#landing-form").submit();
    console.log("Hello inside");
    if (validateDescription($('#notification_title')) && validateDescription($('#notification_content')) )
    {
        $("#notification-form").submit();
    }
    
})

$(".add-new-research-btn").click(function(e){
    e.preventDefault();

    console.log("Hello inside");
    if (validateDescription($('#title')))
    {
        $("#research-form").submit();
    }
    
})

$(".add-new-speciality-btn").click(function(e){
    e.preventDefault();

    console.log("Hello inside");
    if (validateDescription($('#title')))
    {
        $("#speciality-form").submit();
    }
    
})

$(".add-new-media-btn").click(function(e){
    e.preventDefault();

    console.log("Hello inside");
    if (validateDescription($('#title')))
    {
        $("#media-form").submit();
    }
    
})

$(".add-new-department-btn").click(function(e){
    e.preventDefault();

    console.log("Hello inside");
    if (validateDescription($('#name')))
    {
        $("#department-form").submit();
    }
    
})

$(".reply-icon").click(function(){
    $.ajax({
        type: "GET",
        url: 'replyusermessage',
        data: {id: $(this).data('id')},
        dataType: 'json',
        success(data) {
            console.log(data)
            if (data.error == 0)
            {
              console.log(data)
              $('#msg-id').val(data.id)
              $('.msg-subject').text(data.subject)
              $('.msg-message').text(data.message)
            }
            else{
                $('.msg-subject').text('An error occured')
                $('.msg-message').text('An error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $('.msg-subject').text('An error occured')
            $('.msg-message').text('An error occured')  
        }
    })
    $('.black-overlay').show();
    $('.reply-modal').show(200);
})


$(".email-reply-icon").click(function(){
    $.ajax({
        type: "GET",
        url: 'replyuseremail',
        data: {id: $(this).data('id')},
        dataType: 'json',
        success(data) {
            console.log(data)
            if (data.error == 0)
            {
              console.log(data)
              $('#email-id').val(data.id)
              $('.email-subject').text(data.subject)
              $('.email-message').text(data.message)
            }
            else{
                $('.email-subject').text('An error occured')
                $('.email-message').text('An error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $('.email-subject').text('An error occured')
            $('.email-message').text('An error occured')  
        }
    })
    $('.black-overlay').show();
    $('.reply-modal').show(200);
})

$(".website-message-reply-icon").click(function(){
    $.ajax({
        type: "GET",
        url: 'replywebsitemessage',
        data: {id: $(this).data('id')},
        dataType: 'json',
        success(data) {
            console.log(data)
            if (data.error == 0)
            {
              console.log(data)
              $('#website_message-id').val(data.id)
              $('.website_message-subject').text('From ' + data.name + ' ' + data.email)
              $('.website_message-message').text(data.message)
            }
            else{
                $('.website_message-subject').text('An error occured')
                $('.website_message-message').text('An error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $('.website_message-subject').text('An error occured')
            $('.website_message-message').text('An error occured')  
        }
    })
    $('.black-overlay').show();
    $('.reply-modal').show(200);
})

$(".feedback-reply-icon").click(function(){
    $.ajax({
        type: "GET",
        url: 'replyfeedback',
        data: {id: $(this).data('id')},
        dataType: 'json',
        success(data) {
            console.log(data)
            if (data.error == 0)
            {
              console.log(data)
              $('#feedback-id').val(data.id)
              $('.feedback-type').text(data.type)
              $('.feedback-message').text(data.feedback)
            }
            else{
                $('.feedback-type').text('An error occured')
                $('.feedback-message').text('An error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $('.feedback-type').text('An error occured')
            $('.feedback-message').text('An error occured')  
        }
    })
    $('.black-overlay').show();
    $('.reply-modal').show(200);
})

$(".complaint-reply-icon").click(function(){
    $.ajax({
        type: "GET",
        url: 'replycomplaint',
        data: {id: $(this).data('id')},
        dataType: 'json',
        success(data) {
            console.log(data)
            if (data.error == 0)
            {
              console.log(data)
              $('#complaint-id').val(data.id)
              $('.complaint-subject').text(data.subject)
              $('.complaint-message').text(data.query)
            }
            else{
                $('.complaint-subject').text('An error occured')
                $('.complaint-message').text('An error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $('.complaint-subject').text('An error occured')
            $('.complaint-message').text('An error occured')  
        }
    })
    $('.black-overlay').show();
    $('.reply-modal').show(200);
})

$(".clinical-inquiry-reply-icon").click(function(){
    $.ajax({
        type: "GET",
        url: 'replyclinicalinquiry',
        data: {id: $(this).data('id')},
        dataType: 'json',
        success(data) {
            console.log(data)
            if (data.error == 0)
            {
              console.log(data)
              $('#clinical-inquiry-id').val(data.id)
              $('.clinical-inquiry-name').text(data.full_name)
              $('.clinical-inquiry-inquiry').text(data.inquiry)
            }
            else{
                $('.clinical-inquiry-name').text('An error occured')
                $('.clinical-inquiry-inquiry').text('An error occured')
            }
        },
        error(jQxhr, textStatus, errorThrown) {
            console.log(errorThrown)
            $('.clinical-inquiry-name').text('An error occured')
            $('.clinical-inquiry-inquiry').text('An error occured')  
        }
    })
    $('.black-overlay').show();
    $('.reply-modal').show(200);
})



$('.modal-back-btn').click(function(){
    $('.black-overlay').hide();
    $('.reply-modal').hide(200);
})

$('.show-password').click(function(){
    console.log('hello')
    if ($(this).parent().next().attr('type') === "password") {
      $(this).parent().next().attr('type','text');
    } else {
      $(this).parent().next().attr('type','password');
    }
})

$('.appointment-status').change(function(){
    $.ajax({
        type: "POST",
        url: "updateappointmentstatus",
        data: {id: $(this).data('id'), status: $(this).val()},
        dataType: "json",
        success(data) {
            console.log("changed")
        },
        error(jQxhr, textStatus, errorThrown) {
          console.log("error") 
        }
        })
})