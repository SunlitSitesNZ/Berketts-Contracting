<<<<<<< HEAD
=======
let domReady=cb=>{"interactive"===document.readyState||"complete"===document.readyState?cb():document.addEventListener("DOMContentLoaded",cb)};domReady(()=>{document.body.style.visibility="visible"}),$(document).ready((function(){$("#main_contact_form").on("submit",(function(event){event.preventDefault(),$("#submit-btn").prop("disabled",!0);var formData=$(this).serializeArray();$.ajax({url:"./mail.php",type:"POST",data:formData,success:function(responseText,textStatus,jqXHR){var successDiv=$("#success"),failDiv=$("#fail");$("#main_contact_form")[0].reset(),200===jqXHR.status?(successDiv.removeClass("d-none"),failDiv.addClass("d-none")):(failDiv.removeClass("d-none"),successDiv.addClass("d-none"))},error:function(jqXHR,textStatus,errorThrown){console.error("Error:",errorThrown);var failDiv=$("#fail");failDiv.removeClass("d-none"),failDiv.text("Please Try Again Later")}})}))}));

const observer = lozad(); // lazy loads elements with default selector as ".lozad"
observer.observe();
>>>>>>> 95f4483cb45d79ceb5594b502a81965eaf718c65
