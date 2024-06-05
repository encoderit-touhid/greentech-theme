document.addEventListener("DOMContentLoaded", mange_read_more_less());
function mange_read_more_less()
{
  
    const serviceContents = document.querySelectorAll(".service-content");
  
    serviceContents.forEach((container) => {
      const paragraph = container.querySelector("p");
      const fullText = paragraph.textContent.trim();
  
      if (fullText.length > 100) {
        const truncatedText = fullText.slice(0, 100) + "... ";
        paragraph.textContent = truncatedText;
  
        const seeMoreButton = document.createElement("span");
        seeMoreButton.className = "see-more-button";
        seeMoreButton.textContent = "See more";
        paragraph.appendChild(seeMoreButton);
  
        seeMoreButton.addEventListener("click", function () {
          if (seeMoreButton.textContent === "See more") {
            paragraph.textContent = fullText + " ";
            seeMoreButton.textContent = "See less";
            paragraph.appendChild(seeMoreButton);
          } else {
            paragraph.textContent = truncatedText;
            seeMoreButton.textContent = "See more";
            paragraph.appendChild(seeMoreButton);
          }
        });
      }
    });
  
}
var offset=0;

jQuery('#case_study_load_more').on('click',function(e){
  e.preventDefault();
  offset_add=6;

  jQuery.ajax({
    url: action_url_ajax.ajax_url,
    type: 'post',
    dataType: 'json',
    data:
    {

      'action': 'case_study_load_more',
      'offset':offset+offset_add,
      'limit':6,
    },
    beforeSend: function () {
      // setting a timeout
      jQuery('#case_study_load_more').attr("disabled", true);
      jQuery('#case_study_load_more').text('Loading');
  },
    success: function (data) {
     // swal.close();
      
      offset=offset+6;
      jQuery('#case_study_load_more').text('Load More');
      jQuery('#case_study_load_more').attr("disabled", false);
     // if(data.success == "success")
      //{

          jQuery('#case_study_div_page').append(data.html);
        if(data.greentech_case_empty)
        {
          
          jQuery('#case_study_load_more').hide();
        }
      //}
    }
  });
})



var offset=0;

jQuery('#what_we_do_load_more').on('click',function(e){
  e.preventDefault();
  offset_add=6;

  jQuery.ajax({
    url: action_url_ajax.ajax_url,
    type: 'post',
    dataType: 'json',
    data:
    {

      'action': 'what_we_do_load_more',
      'offset':offset+offset_add,
      'limit':6,
    },
    beforeSend: function () {
      // setting a timeout
      jQuery('#what_we_do_load_more').attr("disabled", true);
      jQuery('#what_we_do_load_more').text('Loading');
  },
    success: function (data) {
     // swal.close();
      
      offset=offset+6;
      jQuery('#what_we_do_load_more').text('Load More');
      jQuery('#what_we_do_load_more').attr("disabled", false);
     // if(data.success == "success")
      //{

          jQuery('#what_we_do_load_more_div_page').append(data.html);
          mange_read_more_less()
        if(data.greentech_what_we_do_empty)
        {
          
          jQuery('#what_we_do_load_more').hide();
        }
      //}
    }
  });
})