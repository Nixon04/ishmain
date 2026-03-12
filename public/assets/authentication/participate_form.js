          $(document).ready(function(){

     

            $('#participate_form').on('click', function(){
              $('.participate_container-pv').fadeIn();
          });


             $('#dismiss-participate').on('click', function(){
                 $('.participate_container-pv').fadeOut();
             });

              // Fetch user's country based on IP using ipapi API
              fetch('https://ipapi.co/json/')
              .then(response => response.json())
              .then(data => {
                  const userCountry = data.country_name || 'Unknown';
    
                  
                  $('#Countryid').val(userCountry);
                  console.log(userCountry);
                  console.log('confirm');
                  // document.getElementById('userCountry').innerText = userCountry;
                  // You can use AJAX to send this information to Laravel or store it as needed
              })
              .catch(error => console.error('Error fetching user country:', error));

        $('#categorylist').on('change',function(){
            
            $('#participate_population').empty();
            var category_list = $(this).val();
            var row = "";
            if(category_list == "individual"){
          
                row += 
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="name" class="form-control py-3"/>'+'<span>Name</span>'+'</div>'
                  +

                  '<div class="text-digit-container label-main m-3">'+
                  '<div id="countryFlag" class="tv-box-dash"></div>'+
                  '<input type="text" class="form-control py-3" id="phoneNumberInput" placeholder=" "/>'+
                  '<span>Contact</span>'+
                  '<div id="validationStatus" class="validcall"></div>'+
                    '</div>'
                    +

                '<div class="label-main m-3">' +
                '<input type="text" placeholder=" " id="email_address" class="form-control py-3"/>'+'<span>Professional Email</span>'+
                '<div id="email_error" class="validcall"></div>'+
                '</div>'
                +
              
                '<div class="label-main main-frame-container m-3">' +
                  '<select id="noc" class="form-select py-3">' +
                  '<option value="Passion for this cause">Passion for this cause</option>'+
                  '<option value="Communication skills">Communication skills</option>'+
                  '<option value="Teamwork and collaboration">Teamwork and collaboration</option>'+
                  '<option value="Organizational skills">Organizational skills</option>'+
                  '<option value="Technical skills">Technical skills</option>'+
                  '<option value="Creativity">creativity</option>' +
                  '<option value="Flexibility and Adaptability">Flexibility and Adaptability</option>' +
                  '<option value="Empathy and cultural sensitivity">Empathy and cultural sensitivity</option>' +
                  '<option value="Resilience and patience">Resilience and patience</option>' +
                  '<option value="Commitment and Reliability">Commitment and Reliability</option>' +
                  '</select>'
                +
                '<span class="main-frame-border-top">Skills & Interest</span>'+
            '</div>';
            


            }else if(category_list == "volunteer"){

              
                row += 
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="name" class="form-control py-3"/>'+'<span>Name</span>'+'</div>'
                  +
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="email_address" class="form-control py-3"/>'+'<span>Email Address</span>'+
                '<div id="email_error" class="validcall"></div>'+
                '</div>'
                
                +

                  '<div class="text-digit-container label-main m-3">'+
                '<div id="countryFlag" class="tv-box-dash"></div>'+
                '<input type="text" class="form-control py-3" id="phoneNumberInput" placeholder=" "/>'+
                '<span>Contact</span>'+
                '<div id="validationStatus" class="validcall"></div>'+
                  '</div>'
                  +
                // '<div class="label-main m-3">' +
                // '<input type="text"  placeholder=" " id="contact" class="form-control py-3"/>'+'<span>Contact</span>'+'</div>'
                // +
                '<div class="label-main main-frame-container m-3">' +
                  '<select id="noc" class="form-select py-3">' +
                  '<option value="Passion for this cause">Passion for this cause</option>'+
                  '<option value="Communication skills">Communication skills</option>'+
                  '<option value="Teamwork and collaboration">Teamwork and collaboration</option>'+
                  '<option value="Organizational skills">Organizational skills</option>'+
                  '<option value="Technical skills">Technical skills</option>'+
                  '<option value="Creativity">creativity</option>' +
                  '<option value="Flexibility and Adaptability">Flexibility and Adaptability</option>' +
                  '<option value="Empathy and cultural sensitivity">Empathy and cultural sensitivity</option>' +
                  '<option value="Resilience and patience">Resilience and patience</option>' +
                  '<option value="Commitment and Reliability">Commitment and Reliability</option>' +
                  '</select>'
                +
                '<span class="main-frame-border-top">Skills & Interest</span>'+
            '</div>';
            }else if(category_list == "institute"){
                
             
              
                row += 
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="organization" class="form-control py-3"/>'+'<span>Organization</span>'+'</div>'
                  +
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="name" class="form-control py-3"/>'+'<span>Name</span>'+'</div>'
                +
                '<div class="label-main m-3">' + 
                '<input type="text"  placeholder=" " id="position" class="form-control py-3"/>'+'<span>Position</span>'+'</div>'
                +
                '<div class="label-main m-3">' +
                '<input type="text" placeholder=" " id="email_address" class="form-control py-3"/>'+'<span>Professional Email</span>'+
                '<div id="email_error" class="validcall"></div>'+
                '</div>'
                +

                '<div class="text-digit-container label-main m-3">'+
                '<div id="countryFlag" class="tv-box-dash"></div>'+
                '<input type="text" class="form-control py-3" id="phoneNumberInput" placeholder=" "/>'+
                '<span>Contact</span>'+
                '<div id="validationStatus" class="validcall"></div>'+
                  '</div>'
                  +

                '<div class="label-main main-frame-container m-3">' +
                  '<select id="noc" class="form-select py-3">' +
                  '<option value="Collaboration with local communities ">Collaboration with local commnunities</option>'+
                  '<option value="Cooperation with volunteers/volunteers group(s)">Cooperation with volunteers/volunteers group(s)</option>'+
                  '<option value="Networking with academia or research institution">Networking with academia or research institution</option>'+
                  '<option value="Alliance with businesses or corporate sponsors for funding or support">Alliance with businesses or corporate sponsors for funding or support</option>'+
                  '<option value="Engagement with governmental agencies or authorities">Engagement with governmental agencies or authorities</option>'+
                  '<option value="Cooperation with internation bodies or aid organization">Cooperation with internation bodies or aid organization</option>' +
                   
                  '</select>'
                +
                '<span class="main-frame-border-top">Nature of cooperation</span>'+
            '</div>';

            }else if(category_list == "cooperate"){
                
           
                row += 
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="organization" class="form-control py-3"/>'+'<span>Organization</span>'+'</div>'
                  +
                '<div class="label-main m-3">' +
                '<input type="text"  placeholder=" " id="name" class="form-control py-3"/>'+'<span>Name</span>'+'</div>'
                +
                '<div class="label-main m-3">' + 
                '<input type="text"  placeholder=" " id="position" class="form-control py-3"/>'+'<span>Position</span>'+'</div>'
                +
                '<div class="label-main m-3">' +
                '<input type="text" placeholder=" " id="email_address" class="form-control py-3"/>'+'<span>Professional Email</span>'+
                '<div id="email_error" class="validcall"></div>'+
                '</div>'
                +

                '<div class="text-digit-container label-main m-3">'+
                '<div id="countryFlag" class="tv-box-dash"></div>'+
                '<input type="text" class="form-control py-3" id="phoneNumberInput" placeholder=" "/>'+
                '<span>Contact</span>'+
                '<div id="validationStatus" class="validcall"></div>'+
                  '</div>'
                  +

                '<div class="label-main main-frame-container m-3">' +
                  '<select id="noc" class="form-select py-3">' +
                  '<option value="Collaboration with local communities ">Collaboration with local commnunities</option>'+
                  '<option value="Cooperation with volunteers/volunteers group(s)">Cooperation with volunteers/volunteers group(s)</option>'+
                  '<option value="Networking with academia or research institution">Networking with academia or research institution</option>'+
                  '<option value="Alliance with businesses or corporate sponsors for funding or support">Alliance with businesses or corporate sponsors for funding or support</option>'+
                  '<option value="Engagement with governmental agencies or authorities">Engagement with governmental agencies or authorities</option>'+
                  '<option value="Cooperation with internation bodies or aid organization">Cooperation with internation bodies or aid organization</option>' +
                   
                  '</select>'
                +
                '<span class="main-frame-border-top">Nature of cooperation</span>'+
            '</div>';

            }
           
            $('#participate_population').append(row);

        })
    });
