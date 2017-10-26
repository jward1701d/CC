$(document).ready(function () {
    var $file;
    var source = $('#template').html();
    var template = Handlebars.compile(source);
    
    var prevList = null;
    var currList = null;
    var opened = false;
    var prevObj = null;
    var currObj = null;
    
    var active = "active";
    
    // This function loads the JSON file that the user clicked on.
    function Load(file, $this){
        $.ajax({
                type: "GET",
                url: file,
                dataType: "json",
                cache: false,
                success: function(obj){
                        createList(obj, $this);
                        listController(obj);
                },
                error: function() {
                    alert("An error occurred while processing JSON file.");
                }
            });
    }
    
    $('.catagory').on("click",function (e){
        var $this = $(this);
        $file = $this.attr('data-file');
        if(!$(e.target).is('span.listing')){
            currList = $file; 
            if(currList !== prevList){
                prevList = currList;
                currList = $file;
                opened = true;
                
                Load($file, $this);
            }else if(currList === prevList){
               if(opened === true){
                    $this.children('ul').hide(500, function(){
                        $this.children('ul').remove();
                        $('br:hidden').show();
                        opened = false;
                        //shown = false;
                    });
                }else if(opened === false){
                    Load($file, $this);
                    opened = true;
                }
            }
            if(prevObj !== null){
                if(prevObj.has("ul li.active"))
                {
                    prevObj.children('ul').hide(500, function(){
                        $('br:hidden').show();
                    });
                }
            }
        }
    });
    
   // This function populates the modal so it is good as is.
    function listController(obj){
        $('.listing').click(function(){
            var item = dataParse($(this).attr('data-index'), obj);
            //console.log(item);
            $('.modal-listings').html("");
            $('.modal-listings').html(template(item));
        });
    }
    
    // This functions creates the list element dynamically.
    function createList(data, $this){
        var ul = $('<ul>');
        $.each(data.businesses, function(index,obj){
             var li = $('<li>');
            li.append("<span class='listing' data-toggle='modal'data-target='#d-modal' data-index="+index+">"+"<span class = 'glyphicon glyphicon-arrow-right'></span> "+obj.company + " - "+obj.city+", "+obj.state+" "+obj.country);
            ul.append(li);
        });
        if(opened === true){
            prevObj = $this;
            if($this.children(ul).children().hasClass(active)){
                $this.children('ul').show(500);
            }
            else{
                $this.append(ul);
                $this.children(ul).children().addClass(active);
                $this.children(ul).hide();
                $this.children('ul').show(500);
            }
        }
    }
    // This function retruns a single json object to be parsed to the modal.
    function dataParse(index, obj){
        var temp = obj.businesses[index];
        return temp;
    }
    
    
});