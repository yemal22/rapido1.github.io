$(document).ready(function () {
    $('.ajax1').change(function () {
        
        var chauffeurId = $(this).val();
        var courseId = $(this).closest('tr').find('td:first').text();

       $.ajax({
           url: 'miseAJour.php', 
           method: 'POST',
           data: {
               chauffeur_id: chauffeurId, course_id: courseId
           },
           success: function() {

               $('.chauffDispo option[value="' + chauffeurId + '"]').prop('disabled', true);
               location.reload();
           },
           error: function(xhr, status, error) {
               console.error('Erreur lors de la mise à jour de la disponibilité du chauffeur:', error);
           }
       });

    console.log(chauffeurId);
    console.log(courseId);
      
    })
})

$(document).ready(function(){
    $('.dropdown').hover(function(){
        $(this).find('.dropdown-menu')
        .stop(true, true).delay(100).fadeIn(200);
    }, function(){
        $(this).find('.dropdown-menu')
        .stop(true, true).delay(100).fadeOut(200);
    });
})