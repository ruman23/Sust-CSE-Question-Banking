$(document).ready(function(){
  
  var vote_news = $('#vote').val();
  if(vote_news=='up')
  {
     $('#up').css({'color':'orange'});
     $('#vote-score').css({'color':'orange'});
  }
  else if(vote_news=='down')
  {
     $('#down').css({'color':'red'});
     $('#vote-score').css({'color':'red'});
  }

  $('.vote').click(function(){
    var ques_id = document.getElementById('ques_id').value;
      $.ajaxSetup({
    url: '/voting/'+ques_id,
    type: 'POST',
    cache: 'false',
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

    var self = $(this); // cache $this
    var action = self.data('action'); // grab action data up/down 
    var parent = self.parent().parent(); // grab grand parent .item
    var postid = parent.data('postid'); // grab post id from data-postid
    //var score = parent.data('score'); // grab score form data-score
     
    var score=document.getElementById('vote-score').innerHTML;
 
    // only works where is no disabled class
    if (!parent.hasClass('.disabled')) {
      // vote up action
      if (action == 'up') {
        // send ajax request with post id & action
        $.ajax({
          data: {'postid' : postid, 'action' : 'up','ques_id':ques_id},
          success: function(result)
          {
            console.log(result);
            if(result.status=='up')
            {
        // increase vote score and color to orange
             parent.find('.vote-score').html(++score).css({'color':'orange'});
        // change vote up button color to orange
             self.css({'color':'orange'});
            }
          }
        });

      }
      // voting down action
      else if (action == 'down'){
        // decrease vote score and color to red
                 $.ajax({
          data: {'postid' : postid, 'action' : 'down','ques_id':ques_id},
          success: function(result)
          {
            if(result.status=='down')
            {
        // increase vote score and color to orange
             parent.find('.vote-score').html(--score).css({'color':'red'});
        // change vote up button color to orange
             self.css({'color':'red'});
            }
          }
        });
        //
      };

      // add disabled class with .item
      parent.addClass('.disabled');
    };
  });
});