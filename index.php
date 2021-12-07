<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <button id="btnBack"> back </button>
    <div id="main">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                </tr>
            </thead>
        </table>
        <tbody id="tblPosts">

        </tbody>
        <div id="detail">
            ssssss
        </div>
</body>

<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();
        var url = "https://jsonplaceholder.typicode.com/posts/" + id;
        $.getJSON(url)
            .done((data) => {
                console.log(data);
            })
            .fail((xhr, status, error) => {
            })
    }
    function loadPosts() {
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    console.log(item);
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>";
                    line += "<td><b>" + item.title + "</b><br/>";
                    line += itme.body + "/td";
                    line += "<td> <button on Click='shoDetails(" + item.id + ");'>link </button> </td>";
                    line += "</tr>";
                    $("#tblPosts").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, status, error) => {
            })
    }
    $(() => {
        loadPosts();
        $("#btnBack").click(() => {
            $("#main").show();
        });
    })
</script>

</html>
