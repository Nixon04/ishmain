$(document).ready(function(){
    
    // pagination call response

    itemsperpage = 5;
    var currentpage = 1;

    var itemcount = $('#table-flowchart tr').length;     
    

    $('#table-flowchart tr').each(function(index, tr){
        // console.log('Row ' + (index + 1) + ': ' + $(tr).html());
    });

      showitemspage(currentpage);
      
      function showitemspage(page){
       var startIndex = (page - 1)* itemsperpage;
       var endIndex = startIndex + itemsperpage;

    //    console.log('startindex   ' +startIndex);
       
    //    console.log('newcontent  ' +endIndex);

       $('#table-flowchart tr').hide().slice(startIndex, endIndex).show();
      }

      $('.bx-chevron-right').on('click', function(){
        var totalItems = $('#table-flowchart tr').length;
        var totalpages = Math.ceil(totalItems / itemsperpage);

        if(currentpage < totalpages){
            currentpage++;
            showitemspage(currentpage);

            $('#count').html('CurrentPage: ' +currentpage);

            console.log('currentpage ' +currentpage);
            
            var startIndex = (currentpage - 1)*itemsperpage;
            var nextTrindex = $('#table-flowchart tr:visible').first().index() + 1;
            var nexttrcount = startIndex + nextTrindex;
            // console.log('nextr' + nextTrindex + 'count  ' +nexttrcount);
          
        }

      });

      $('.bx-chevron-left').on('click', function(){
          if(currentpage > 1){
            currentpage--;

            $('#count').html('CurrentPage: ' +currentpage);
            showitemspage(currentpage);
          }
      });



   
})