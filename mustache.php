<!--
You can use mustache.js to render mustache templates anywhere you can use JavaScript.
This includes web browsers, server-side environments such as node, and CouchDB views.
-->
<html>
<head>
    <script type="text/javascript" src="APIs/Mustache/mustache.js" ></script>
    <script type="text/javascript">
        var data = {
            firstName: "Christophe",
            lastName: "Coenraets",
            blogURL: "http://coenraets.org"
        };
        function myFunction() {
            var element = document.getElementById("sampleArea");
            var template = element.innerHTML;
            var html = Mustache.to_html(template, data);
            element.innerHTML = html;
        }
    </script>
</head>
<body>

<div id="sampleArea">
        <h1>{{firstName}} {{lastName}}</h1>Blog: <a href="{{blogURL}}">Link</a>
</div>
<button onclick="myFunction()">Mustache</button>
<table border="1">
    <TR>
        <TD><H2>Spalte 1</H2></TD><TD><H2>Spalte 2</H2></TD>
    </TR>
<? for($i = 0 ; $i < 10; $i++){?>
    <TR>
        <TD><?echo "Zeile".$i?></TD><TD><?echo "Text"?></TD>
    </TR>
<?}?>
</table>

</body>
</html>