<html>
    <head>
<!-- Редактор Визивиг-->

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
            var toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                [ 'link', 'image', 'video', 'formula' ],          // add's image support
                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'font': [] }],
                [{ 'align': [] }],

                ['clean']                                         // remove formatting button
            ];
setTimeout( () =>
{
        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },

            theme: 'snow'
        });

        $("#sendForm").on("submit",function() {
        $("#hiddenArea").val(quill.getSemanticHTML());
})

        }, 3000 );

    </script>
<!-- /Редактор Визивиг-->
    </head>

    <body>
        <h1>Админка</h1>
        <h2>Заметки</h2>
        <form action="be/addNotes.php" method="post">
        <input type="text" placeholder="Заголовок" name="title"/>
        <br>
        <div id="editor"></div>
        <br>
        <button type="submit">Добавить заметку</button>
        </form>
        <h2>Картинка</h2>
        <br><br>
        <form action="be/images.php" method="post">
        <input type="file" name="image"/>
        </form>
    </body>


</html>
