<?php return [
    'plugin' => [
        'name' => 'Contato Simples',
        'description' => 'Um simples formulário de contato conosco',
    ],
    'simplecontact' => [
        'from' => 'De',
        'subject' => 'Assunto',
        'name' => 'Nome',
        'email' => 'Email',
        'status' => 'Status',
        'date' => 'Data',
        'mainmenu' => 'Mensagens',
        'submenu' => 'Caixa de Entrada',
        'permission' => 'Contato Simples',
        'permission_messages' => 'Mensagens',
        'permission_settings' => 'Configurações',
        'phone' => 'Fone',
        'message' => 'Mensagem',
        'reply' => 'responder',
        'print' => 'imprimir',
	'print_message' => 'Imprimir Mensagem',
        'back' => 'Voltar',
        'message_delete_success' => 'Mensagem excluída com sucesso',
        'message_delete_error' => 'Ocorreu um erro, não foi possível excluir a mensagem.',
        'message_not_found_error' => 'Não foi possível encontrar o que você está procurando!',
        'message_reply_error' => 'Ocorreu um erro, não foi possível enviar sua resposta.',
        'message_reply_success' => 'Mensagem enviada com sucesso.',
	'message_reply' => 'Responder Mensagem',
	'button_submit_reply' => 'Enviar',
	'button_close_reply' => 'Fechar',
    ],
    'settings' => [
        'section_contact_label' => 'Configurações',
        'redirect_label' => 'Redirecionar',
        'redirect_comment' => 'Habilitar redirecionamento de página após completar o envio do formuário',
        'redirect_url_label' => 'Selecione a Página de redirecionamento',
        'redirect_url_comment' => 'Selecione a página no menu suspenso para onde quer redirecionar depois de completar o envio do formuário',
        'success_message' => 'Mensagem de sucesso',
        'success_message_comment' => 'Depois do formulário ser enviado está mensagem de sucesso será exibida',
        'section_mail_label' => 'Configurações de correio',
        'notification_label' => 'Notificação',
        'notification_comment' => 'Enviar notificação de correio para você quando o formulário de contato for enviado',
        'notification_email_address' => 'Endereço de Email para Notificação',
        'notification_email_address_comment' => 'Endereço de e-mail para onde o correio de notificação será enviado',
        'auto_reply_label' => 'Resposta automatica',
        'auto_reply_comment' => 'Enviar e-mail de resposta automática para o usuário que enviou o formulário.',
        'section_recaptcha_label' => 'Configurações de reCAPTCHA',
        'section_recaptcha_comments' => 'Exibir ou ocultar o reCAPTCHA no formulário de contato',
        'recaptcha_label' => 'reCAPTCHA',
        'recaptcha_comment' => 'exibir Widget reCAPTCHA no formulário',
        'site_key_label' => 'Chave do Site',
        'site_key_comment' => 'Sua chave do site fornecido pelo Google',
        'secret_key_label' => 'Chave Secreta',
        'secret_key_comment' => 'Sua chave secreta fornecido pelo Google',
        'form_top_text_label' => 'Título do Formulário',
        'form_top_text_comment' => 'Este texto será exibido no topo do formulário',
    ],
    'component' => [
	'name' => 'Simples formulário de contato',
        'description' => 'Adicionar o formulário de contato para a página',
        'name_title' => 'Rótulo do campo Nome',
        'name_description' => 'O rótulo do Nome aparecerá acima do campo(obrigatório)',
        'name_validation_message' => '',
        'email_title' => 'Rótulo do campo e-mail',
        'email_description' => 'O rótulo do Email aparecerá acima do campo(obrigatório)',
        'email_validation_message' => '',
        'phone_title' => 'Rótulo do campo Telefone',
        'phone_description' => 'O rótulo do Telefone aparecerá acima do campo(obrigatório)',
        'subject_title' => 'Rótulo do campo Assunto',
        'subject_description' => 'O rótulo do Assunto aparecerá acima do campo(obrigatório)',
        'subject_validation_message' => '',
        'message_title' => 'Rótulo do campo Mensagem',
        'message_description' => 'O rótulo da Mensagem aparecerá acima do campo(obrigatório)',
        'message_validation_message' => '',
        'display_phone_field' => 'Exibir campo Telefone',
        'display_phone_field_description' => 'Exibir campo do telefone no formulário',
        'button_text' => 'Texto do botão de envio do formulário',
        'button_description' => 'Texto do botão de envio(obrigatório)',
        'button_validation_message' => '',
    ],
    'widget' => [
        'label' => 'Resumo geral das Mensagens de Contato Conosco',
        'properties_title' => 'título do widget',
        'properties_chart' => 'Tipo de Gráfico',
        'properties_chart_option_bar' => 'Barra',
        'properties_chart_option_pie' => 'Torta',
        'new' => 'Nova',
        'replied' => 'Respondida',
        'total' => 'Total'
    ],
];
