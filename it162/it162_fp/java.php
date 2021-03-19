<?php include 'includes/fp-header.php';?> 

<script>
var myLang = 'Java';
    $( function() {
        //hljs.initHighlightingOnLoad(); // load code space style
        
        loadinitialpage();
        defineClickEvent();     
    }); 

    function loadinitialpage(){    
        $.ajax({
            url : "txt/" + myLang + "_history.txt",
                dataType: "text",
                success : function (data) {
                    $("#divshowhistory").html(data);
                    $("#h4History").html("Language history");
                    showdiv('History');
                }
        }); 
    }
    function defineClickEvent(){
        $("#li-history").click(function() {
            loadinitialpage();
        });
        $("#li-declaration").click(function() {
            loadtxt("txt/" + myLang + "_declaration.txt", myLang + " Variable declarations");      
        });
        $("#li-loop").click(function() {
            loadtxt("txt/" + myLang + "_loop.txt", myLang + " Loop");    
        });
        $("#li-branches").click(function() {
            loadtxt("txt/" + myLang + "_branches.txt", myLang + " Branches");    
        });
    }

    function loadtxt(_file, _h4txt){
        $.ajax({
            url : _file,
                dataType: "text",
                success : function (data) {
                $("#mycode").html(data);
                $("#h4Code").html(_h4txt);
                hljs.highlightAll(); // load code space style     
                showdiv('Code');
                }
            }); 
    }

    function showdiv(_type){
        if (_type == 'History'){
            $("#divhistory").show(); 
            $("#divcode").hide(); 
        } else {
            $("#divhistory").hide(); 
            $("#divcode").show();
        }    
    }
</script>


<div class="wrapper">
    <aside class="list-type1">
        <ol>
            <li id="li-history"><a href="#">History</a></li>
            <li id="li-declaration"><a href="#">Declaration</a></li>
            <li id="li-loop"><a href="#">Loop</a></li>
            <li id="li-branches"><a href="#">Branches</a></li>
        </ol>   
    </aside>

    <section>
        <div id="divhistory">
            <h4 id="h4History"></h4>
                <div id="divshowhistory"></div>
            </div>
        <div id="divcode">
            <h4 id="h4Code"></h4>
            <pre><code id="mycode" class="java"></code></pre>
        </div>
        
    </section>    
<div>


<?php include 'includes/fp-footer.php';?>
