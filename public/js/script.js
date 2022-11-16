$(function(){
    $('#formFile').change(function(){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()

        fileReader.onloadend = function(){
            $('#preview').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
})
