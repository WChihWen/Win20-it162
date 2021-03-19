<?php include 'includes/fp-header.php';?> 

<script>
    var myLang = 'Python';
    $( function() {
        //hljs.initHighlightingOnLoad(); // load code space style
        
        loadinitialpage();
        defineClickEvent();     
    }); 

    function loadinitialpage(){    
        $.ajax({
            url : "txt/" + myLang + "_Al_Sorting.txt",
                dataType: "text",
                success : function (data) {
                    $("#divshowhistory").html(data);
                    $("#h4History").html("Sorting Algorithm");
                    showdiv('History');
                }
        }); 
    }
    function defineClickEvent(){
        $("#li-history").click(function() {
            loadinitialpage();
            $("#divcodeinfo").html("");
        });
        $("#li-BubbleSort").click(function() {
            loadtxt("txt/" + myLang + "_Al_BubbleSort.txt",  myLang + " Bubble Sort");      
            var strInfo = "Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps through the list, compares adjacent elements and swaps them if they are in the wrong order. The pass through the list is repeated until the list is sorted.";
            $("#divcodeinfo").html(strInfo);
        });
        $("#li-SelectionSort").click(function() {
            loadtxt("txt/" + myLang + "_Al_SelectionSort.txt", myLang + " Selection Sort");   
            var strInfo = "Insertion sort is a simple sorting algorithm that builds the final sorted array (or list) one item at a time.  It is much less efficient on large lists than more advanced algorithms such as quicksort, heapsort, or merge sort.";
            $("#divcodeinfo").html(strInfo); 
        });
        $("#li-InsertionSort").click(function() {
            loadtxt("txt/" + myLang + "_Al_InsertionSort.txt", myLang + " Insertion Sort");
            var strInfo = "In computer science, selection sort is an in-place comparison sorting algorithm. It has an O(n2) time complexity, which makes it inefficient on large lists, and generally performs worse than the similar insertion sort. Selection sort is noted for its simplicity and has performance advantages over more complicated algorithms in certain situations, particularly where auxiliary memory is limited.";
            $("#divcodeinfo").html(strInfo);    
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
    <aside class="list-type2">
        <ol>
            <li id="li-history"><a href="#" target="blanck">Sorting Algorithm</a></li>
            <li id="li-BubbleSort"><a href="#">Bubble Sort</a></li>
            <li id="li-SelectionSort"><a href="#">Selection Sort</a></li>
            <li id="li-InsertionSort"><a href="#">Insertion Sort</a></li>
        </ol>   
    </aside>

    <section>
        <div id="divhistory">
            <h4 id="h4History"></h4>
            <div id="divshowhistory"></div>
        </div>
        <div id="divcode">
            <h4 id="h4Code"></h4>
            <div id="divcodeinfo"></div>
            <pre><code id="mycode" class="java"></code></pre>
        </div>
        
    </section>    
<div>


<?php include 'includes/fp-footer.php';?>