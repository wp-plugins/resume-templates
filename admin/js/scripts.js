jQuery(document).ready(function($)
	{
		


		$(document).on('click', '.resume-templates-admin .add_new_skill', function()
			{
				var row = $.now(); 
				$(".section-content-skills").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_skill_name" placeholder="Skill Name, ex: HTML" name="resume_templates_skill_name['+row+'][]" type="text" value="" /><input class="resume_templates_skill_value" placeholder="Skill value, ex: 75%" name="resume_templates_skill_value['+row+'][]" type="text" value="" /><span class="remove-skill">X</span></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-skill', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})


		$(document).on('click', '.resume-templates-admin .add_new_social', function()
			{
				var row = $.now(); 
				$(".section-content-socials").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_social_name" placeholder="ex: Twitter" name="resume_templates_social_name['+row+'][]" type="text" value="" /><input class="resume_templates_social_value" placeholder="social value, ex: username" name="resume_templates_social_value['+row+'][]" type="text" value="" /><span class="remove-social">X</span></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-social', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})



		$(document).on('click', '.resume-templates-admin .add_new_language', function()
			{
				var row = $.now(); 
				$(".section-content-languages").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_language_name" placeholder="ex: English" name="resume_templates_language_name['+row+'][]" type="text" value="" /><input class="resume_templates_language_value" placeholder="language value, ex: Expert" name="resume_templates_language_value['+row+'][]" type="text" value="" /><span class="remove-language">X</span></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-language', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})



		$(document).on('click', '.resume-templates-admin .add_new_interest', function()
			{
				var row = $.now(); 
				$(".section-content-interests").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_interest_name" placeholder="ex: Music" name="resume_templates_interest_name['+row+'][]" type="text" value="" /><input class="resume_templates_interest_value" placeholder="ex: 95%" name="resume_templates_interest_value['+row+'][]" type="text" value="" /><span class="remove-interest">X</span></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-interest', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})




		$(document).on('click', '.resume-templates-admin .add_new_education', function()
			{
				var row = $.now(); 
				$(".section-content-educations").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_education_institution" placeholder="University of Florida" name="resume_templates_education_institution['+row+'][]" type="text" value="" /><input class="resume_templates_education_year" placeholder="ex: 2010-2012" name="resume_templates_education_year['+row+'][]" type="text" value="" /><span class="remove-education">X</span><input class="resume_templates_education_position" placeholder="ex: B.Sc" name="resume_templates_education_position['+row+'][]" type="text" value="" /><textarea placeholder="Details" name="resume_templates_education_details['+row+'][]" ></textarea><br /><br /></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-education', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})



		$(document).on('click', '.resume-templates-admin .add_new_experiences', function()
			{
				var row = $.now(); 
				$(".section-content-experiencess").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_experiences_institution" placeholder="ParaTheme Studio Ltd." name="resume_templates_experiences_institution['+row+'][]" type="text" value="" /><input class="resume_templates_experiences_year" placeholder="ex: 2010-2012" name="resume_templates_experiences_year['+row+'][]" type="text" value="" /><span class="remove-experiences">X</span><input class="resume_templates_experiences_position" placeholder="ex: 2010-2012" name="resume_templates_experiences_position['+row+'][]" type="text" value="" /><textarea placeholder="Details" name="resume_templates_experiences_details['+row+'][]" ></textarea><br /><br /></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-experiences', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})


		$(document).on('click', '.resume-templates-admin .add_new_award', function()
			{
				var row = $.now(); 
				$(".section-content-awards").append('<tr><td class="section-dragHandle">*</td><td><input class="resume_templates_award_institution" placeholder="My Grad School." name="resume_templates_award_institution['+row+'][]" type="text" value="" /><input class="resume_templates_award_year" placeholder="ex: 2010-2012" name="resume_templates_award_year['+row+'][]" type="text" value="" /><span class="remove-award">X</span><input class="resume_templates_award_position" placeholder="ex: Fisrt Class" name="resume_templates_award_position['+row+'][]" type="text" value="" /><textarea placeholder="Details" name="resume_templates_award_details['+row+'][]" ></textarea><br /><br /></td></tr>');
			})


		$(document).on('click', '.resume-templates-admin .remove-award', function()
			{
				if (confirm('Do you really want to delete this section ?')) {
					$(this).parent().parent().remove();
				}
			})


		$(document).on('change', '.resume-templates-admin .resume_templates_section_for', function()
			{
				
				var section_for = $(this).val();
				var resumeid = $(this).attr('resumeid');				
				var section_current = $(this).attr('section');	
							
				$('.'+section_current+'.section-content-loading').fadeIn();	
				



				$.ajax(
					{
				type: 'POST',
				url:resume_templates_ajax.resume_templates_ajaxurl,
				data: {"action": "resume_templates_section_content", "section_current":section_current, "section_for":section_for,"resumeid":resumeid},
				success: function(data)
						{	
							//alert(data);
							
							$('.'+section_current+'.section-content').html(data);								
							
							$('.'+section_current+'.section-content-loading').fadeOut();	
						}
					});







				//alert(section);
			
			})


			
			
			
			

		$(document).on('click', '.resume-templates-admin .section-remove', function()
			{
				
				if (confirm('Do you really want to delete this section ?')) {
					
					$(this).parent().parent().parent().remove();
				}
			
			})






		
		$(document).on('click', '.resume-templates-admin .section .section-header', function()
			{

				if($(this).parent().parent().hasClass('active'))
					{
						$(this).parent().parent().removeClass('active');
					}
				else
					{
						$(this).parent().parent().addClass('active');
					}
				
			})
		
		
		
		
		
		
		
		$(document).on('click', '.resume-templates-admin .add-new-section', function()
			{
				
				var secion_name = prompt("Section name please","");
				
				if(secion_name == null || secion_name == '')
					{
					
					}
				else
					{
						var row = $.now(); 
						
						
						$(".section-list").append('<tr class="section"><td class="section-dragHandle">*</td><td><div class="section-header">'+secion_name+'<span class="section-remove">X</span></div><div class="section-info"><input class="resume_templates_section_title" type="text" name="resume_templates_section_title['+row+']" value="'+secion_name+'" placeholder="section name." /><br /><textarea class="resume_templates_section_details" name="resume_templates_section_details['+row+']" ></textarea></div></td></tr>');
					}

				
				 
				//alert(row);
			})

	});	







