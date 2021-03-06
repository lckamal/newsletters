<?php

// labels
$lang['newsletters.subject'] 						= 'Objet';
$lang['newsletters.created'] 						= 'Créée';
$lang['newsletters.sent'] 							= 'Envoyée le';
$lang['newsletters.actions'] 						= 'Actions';
$lang['newsletters.not_sent_label'] 				= 'Non envoyée';
$lang['newsletters.view'] 							= 'Consulter';
$lang['newsletters.edit'] 							= 'Editer';
$lang['newsletters.delete'] 						= 'Supprimer';
$lang['newsletters.send'] 							= 'Tout envoyer';
$lang['newsletters.send_cron'] 						= 'Envoyer Cron';
$lang['newsletters.send_batch']						= 'Envoyer le batch';
$lang['newsletters.pending']						= 'Cron en attente';
$lang['newsletters.export_xml'] 					= 'Export XML';
$lang['newsletters.export_csv'] 					= 'Export CSV';
$lang['newsletters.export_json'] 					= 'Export JSON';
$lang['newsletters.title_label'] 					= 'Objet de la newsletter';
$lang['newsletters.email_label'] 					= 'Adresse électronique';
$lang['newsletters.subscribe'] 						= 'S\'inscrire';
$lang['newsletters.unsubscribe'] 					= 'Se désinscrire';
$lang['newsletters.admin_subscribe'] 				= 'Ajouter un(e) inscrit(e)';
$lang['newsletters.admin_unsubscribe'] 				= 'Supprimer un(e) inscrit(e)';
$lang['newsletters.subject_suffix'] 				= 'Newsletter';
$lang['newsletters.target']							= 'URL de destination';
$lang['newsletters.url']							= 'Insérer une URL';
$lang['newsletters.add']							= 'Ajouter une autre URL';
$lang['newsletters.stats']							= 'Statistiques';
$lang['newsletters.unique_opens']					= 'Ouvertures uniques';
$lang['newsletters.total_opens']					= 'Total des ouvertures';
$lang['newsletters.unique_clicks']					= 'Clics uniques';
$lang['newsletters.total_clicks']					= 'Total des clics';
$lang['newsletters.template_select']				= 'Sélectionner le modèle';
$lang['newsletters.template_title']					= 'Titre du modèle';
$lang['newsletters.template_select_edit']			= 'Sélectionner le modèle à éditer';
$lang['newsletters.template_edit']					= 'Editer le modèle';
$lang['newsletters.template_new']					= 'Créer un nouveau modèle';
$lang['newsletters.tracked_urls']					= 'URLs trackées';
$lang['newsletters.body']							= 'Corps de la newsletter';
$lang['newsletters.template_body']					= 'Corps du modèle';

// titles
$lang['newsletters.letter_title']					= 'Newsletter';
$lang['newsletters.newsletters']					= 'Newsletters';
$lang['newsletters.add_title']						= 'Créer une newsletter';
$lang['newsletters.edit_title']						= 'Editer une newsletter';
$lang['newsletters.list_title'] 					= 'Liste des newsletters';
$lang['newsletters.title_newsletter_opens']			= 'Tracker les ouvertures de newsletter';
$lang['newsletters.title_newsletter_urls']			= 'Ajouter une URL trackée';
$lang['newsletters.click_report']					= 'Rapport de clics';
$lang['newsletters.open_statistics']				= 'Ouvrir les statistiques';
$lang['newsletters.templates']						= 'Modèles';
$lang['newsletters.template_manager']				= 'Gestionnaire de modèles';
$lang['newsletters.subscribers']					= 'Inscrit(e)s';
$lang['newsletters.statistics']						= 'Statistiques';

// messages
$lang['newsletters.example_email']					= 'user@example.com';
$lang['newsletters.no_newsletters_error'] 			= 'Il n\'y a pas de newsletters. <a href="'.current_url().'/create">En créer une</a>';
$lang['newsletters.subscribed_success'] 			= 'Vous êtes maintenant inscrit(e) et recevrez donc notre prochaine newsletter.';
$lang['newsletters.admin_subscribed_success'] 		= 'L\'adresse électronique a bien été ajoutée à votre liste d\'inscrit(e)s. Ils/elles recevront la prochaine newsletter.';
$lang['newsletters.subscribe_desc'] 				= 'Abonnez-vous à notre newsletter pour connaître nos dernières infos.';
$lang['newsletters.subscriber_count']				= 'Vous avez %s inscrit(e)s.';
$lang['newsletters.unsubscribe_success'] 			= 'L\'adresse électronique a bien été supprimée de votre liste.';
$lang['newsletters.unsubscribe_error'] 				= 'Désolé, l\'adresse électronique n\'a pas pu être supprimée.';
$lang['newsletters.duplicate_email'] 				= 'Cette adresse électronique a déjà été enregistrée.';
$lang['newsletters.default_email'] 					= 'Merci de fournir une adresse électronique.';
$lang['newsletters.delete_mail_success'] 			= 'Vous avez été supprimé(e) de la liste de diffusion de nos newsletters.';
$lang['newsletters.delete_mail_error'] 				= 'Votre adresse électronique n\'a pas pu être supprimée de notre liste de diffusion. Merci de nous contacter pour que nous puissions la supprimer manuellement.';
$lang['newsletters.add_success'] 					= 'La newsletter "%s" a bien été enregistrée.';
$lang['newsletters.add_error'] 						= 'Une erreur est survenue. La newsletter n\'a pas pu être enregistrée.';
$lang['newsletters.template_add_success'] 			= 'Le modèle "%s" a bien été enregistré.';
$lang['newsletters.template_delete_success'] 		= 'Le modèle a bien été supprimé.';
$lang['newsletters.sent_success'] 					= 'La newsletter a bien été envoyée.';
$lang['newsletters.sent_error'] 					= 'Une erreur est survenue et la newsletter n\'a pas pu être envoyée à tou(te)s les inscrit(e)s. Merci de vérifier vos paramètres et d\'essayer d\'envoyer à nouveau. Les adresses électroniques déjà traitées lors du précédent envoi ne feront pas l\'objet d\'un nouvel envoi.';
$lang['newsletters.no_subscribers']					= 'La newsletter a déjà été envoyée à tou(te)s les inscrit(e)s ou vous n\'avez pas d\'inscrit(e)s.';
$lang['newsletters.all_sent']						= 'Toutes les adresses électroniques %s ont fait l\'objet d\'un envoi';
$lang['newsletters.number_sent']					= '%s de %s adresses électroniques ont fait l\'objet d\'un envoi';
$lang['newsletters.confirm']						= 'Vous allez lancer un mailing. Etes-vous bien sûr de vouloir envoyer ce mailing ?';
$lang['newsletters.tracked_urls_error']				= 'Il y a une valeur non valide dans le champ d\'url trackée. Toutes les adresses doivent commencer par http:// ou https://';
$lang['newsletters.sending']						= 'Envoi en cours...';
$lang['newsletters.cron_set']						= 'Les newsletters seront envoyées au départ de la routine Cron.';
$lang['newsletters.opt_in_message']					= 'Merci. Un email d\'activation vient d\'être envoyé à l\'adressse électronique fournie. Vous devez cliquer sur lien contenu dans cet email pour pouvoir être ajouté(e) à notre liste de diffusion.';
$lang['newsletters.opt_in_success']					= 'Félicitations ! Votre adresse électronique a été ajoutée à notre liste de diffusion. Vous recevrez donc prochainement notre nouvelle newsletter.';
$lang['newsletters.opt_in_error']					= 'Désolé. Il semblerait que votre lien d\'activation ne soit pas valide ou que votre adresse électronique ait été supprimée. Merci de vous inscrire à nouveau ou de nous contacter.';