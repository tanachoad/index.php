<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>
    <style>
       .id{
           color: darkblue;
        }
        .itle{
           color: darkred;
        }
        .thor{
           color: deepskyblue;
        }
    </style>
</head>
<body>
    <button id="btnBack"> back </button>
    <div id="main">
        <table>
            <thead>
                <tr>
                    <th class = "id"><ins>ID</ins></th>
                    <th class = "itle"><ins>Title</ins></th>
                    <th class = "thor"><ins>Author</ins></th>
                </tr>
            </thead>
            <tbody id="tblPost">
            </tbody>
        </table>
    </div>
    <div id="detail">
        <table>
            <thead>
                <tr>
                    <th class = "id"><ins>ID</ins></th>
                    <th class = "itle"><ins>Title</ins></th>
                    <th class = "thor"><ins>Author</ins></th>
                </tr>
            </thead>
            <tbody id="tbldetails">
            </tbody>
        </table>
    </div>
</body>
<script>
    function LoadPosts() {
        $("#main").show();
        $("#detail").hide();
        var url = "https://jsonplaceholder.typicode.com/posts"
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {
            })
    }
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();
        var url = "https://jsonplaceholder.typicode.com/posts/" + id 
        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='details'";
                    line += "><td>" + data.id + "</td>"
                    line += "<td><b>" + data.title + "</b><br/>"
                    line += data.body + "<br/>"
                    line += data.show"</td>"
                    line += "<td>" + data.userId + "</td>"
                    line += "</tr>";
                    $("#tbldetails").append(line);
            })
            .fail((xhr, err, status) => {
            })
    }
    $(() => {
        LoadPosts();
        $("#detail").hide();
        
            $("#main").show();
            $("#btnBack").click(() => {
            $("#main").show();
            $("#details").remove();
        });
    })
</script>
</html>
