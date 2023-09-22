<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Criados Recentemente',
    'recently_created_pages' => 'Páginas Criadas Recentemente',
    'recently_updated_pages' => 'Páginas Atualizadas Recentemente',
    'recently_created_chapters' => 'Capítulos Criados Recentemente',
    'recently_created_books' => 'Livros Criados Recentemente',
    'recently_created_shelves' => 'Prateleiras Criadas Recentemente',
    'recently_update' => 'Atualizados Recentemente',
    'recently_viewed' => 'Visualizados Recentemente',
    'recent_activity' => 'Atividade Recente',
    'create_now' => 'Criar um agora',
    'revisions' => 'Revisões',
    'meta_revision' => 'Revisão #:revisionCount',
    'meta_created' => 'Criado :timeLength',
    'meta_created_name' => 'Criado :timeLength por :user',
    'meta_updated' => 'Atualizado :timeLength',
    'meta_updated_name' => 'Atualizado :timeLength por :user',
    'meta_owned_name' => 'De :user',
    'meta_reference_page_count' => 'Referenciado em :count página|Referenciado em :count páginas',
    'entity_select' => 'Seleção de Entidade',
    'entity_select_lack_permission' => 'Você não tem as permissões necessárias para selecionar este item',
    'images' => 'Imagens',
    'my_recent_drafts' => 'Meus Rascunhos Recentes',
    'my_recently_viewed' => 'Visualizados por mim Recentemente',
    'my_most_viewed_favourites' => 'Meus Favoritos Mais Visualizados',
    'my_favourites' => 'Meus Favoritos',
    'no_pages_viewed' => 'Você não visualizou nenhuma página',
    'no_pages_recently_created' => 'Nenhuma página criada recentemente',
    'no_pages_recently_updated' => 'Nenhuma página atualizada recentemente',
    'export' => 'Exportar',
    'export_html' => 'Arquivo Web Contained',
    'export_pdf' => 'Arquivo PDF',
    'export_text' => 'Arquivo Texto',
    'export_md' => 'Arquivos para remarcar',

    // Permissions and restrictions
    'permissions' => 'Permissões',
    'permissions_desc' => 'Defina as permissões aqui para substituir as permissões padrão fornecidas pelas funções do usuário.',
    'permissions_book_cascade' => 'As permissões definidas em livros serão automaticamente em cascata para capítulos e páginas filho, a menos que tenham suas próprias permissões definidas.',
    'permissions_chapter_cascade' => 'As permissões definidas nos capítulos serão automaticamente em cascata para as páginas filhas, a menos que tenham suas próprias permissões definidas.',
    'permissions_save' => 'Salvar Permissões',
    'permissions_owner' => 'Proprietário',
    'permissions_role_everyone_else' => 'Todos os outros',
    'permissions_role_everyone_else_desc' => 'Defina permissões para todas as funções não especificamente substituídas.',
    'permissions_role_override' => 'Substituir permissões para função',
    'permissions_inherit_defaults' => 'Herdar padrões',

    // Search
    'search_results' => 'Resultado(s) da Pesquisa',
    'search_total_results_found' => ':count resultado encontrado|:count resultados encontrados',
    'search_clear' => 'Limpar Pesquisa',
    'search_no_pages' => 'Nenhuma página corresponde à pesquisa',
    'search_for_term' => 'Pesquisar por :term',
    'search_more' => 'Mais Resultados',
    'search_advanced' => 'Pesquisa Avançada',
    'search_terms' => 'Termos da Pesquisa',
    'search_content_type' => 'Tipo de Conteúdo',
    'search_exact_matches' => 'Correspondências Exatas',
    'search_tags' => 'Persquisar Tags',
    'search_options' => 'Opções',
    'search_viewed_by_me' => 'Visualizado por mim',
    'search_not_viewed_by_me' => 'Não visualizado por mim',
    'search_permissions_set' => 'Permissão definida',
    'search_created_by_me' => 'Criado por mim',
    'search_updated_by_me' => 'Atualizado por mim',
    'search_owned_by_me' => 'Possuído por mim',
    'search_date_options' => 'Opções de Data',
    'search_updated_before' => 'Atualizado antes de',
    'search_updated_after' => 'Atualizado depois de',
    'search_created_before' => 'Criado antes de',
    'search_created_after' => 'Criado depois de',
    'search_set_date' => 'Definir Data',
    'search_update' => 'Refazer Pesquisa',

    // Shelves
    'shelf' => 'Prateleira',
    'shelves' => 'Prateleiras',
    'x_shelves' => ':count Prateleira|:count Prateleiras',
    'shelves_empty' => 'Nenhuma prateleira foi criada',
    'shelves_create' => 'Criar Nova Prateleira',
    'shelves_popular' => 'Prateleiras Populares',
    'shelves_new' => 'Prateleiras Novas',
    'shelves_new_action' => 'Nova Prateleira',
    'shelves_popular_empty' => 'As prateleiras mais populares aparecerão aqui.',
    'shelves_new_empty' => 'As prateleiras criadas mais recentemente aparecerão aqui.',
    'shelves_save' => 'Salvar Prateleira',
    'shelves_books' => 'Livros nesta prateleira',
    'shelves_add_books' => 'Adicionar livros a esta prateleira',
    'shelves_drag_books' => 'Arraste os livros abaixo para adicioná-los a esta estante',
    'shelves_empty_contents' => 'Esta prateleira não possui livros atribuídos a ela',
    'shelves_edit_and_assign' => 'Editar prateleira para atribuir livros',
    'shelves_edit_named' => 'Editar estante :name',
    'shelves_edit' => 'Editar prateleira',
    'shelves_delete' => 'Excluir prateleira',
    'shelves_delete_named' => 'Excluir estante :name',
    'shelves_delete_explain' => "Isso excluirá a estante com o nome ':name'. Os livros contidos não serão excluídos.",
    'shelves_delete_confirmation' => 'Tem certeza de que deseja excluir esta prateleira?',
    'shelves_permissions' => 'Permissões de prateleira',
    'shelves_permissions_updated' => 'Permissões de prateleira atualizadas',
    'shelves_permissions_active' => 'Permissões de prateleira ativas',
    'shelves_permissions_cascade_warning' => 'As permissões nas prateleiras não são automaticamente em cascata para os livros contidos. Isso ocorre porque um livro pode existir em várias prateleiras. No entanto, as permissões podem ser copiadas para livros filhos usando a opção encontrada abaixo.',
    'shelves_permissions_create' => 'As permissões de criação de prateleira são usadas apenas para copiar livros filhos usando a ação abaixo. Eles não controlam a capacidade de criar livros.',
    'shelves_copy_permissions_to_books' => 'Copiar Permissões para Livros',
    'shelves_copy_permissions' => 'Copiar Permissões',
    'shelves_copy_permissions_explain' => 'Isso aplicará as configurações de permissão atuais desta estante a todos os livros contidos nela. Antes de ativar, verifique se todas as alterações nas permissões desta prateleira foram salvas.',
    'shelves_copy_permission_success' => 'Permissões de prateleira copiadas para :count books',

    // Books
    'book' => 'Livro',
    'books' => 'Livros',
    'x_books' => ':count Livro|:count Livros',
    'books_empty' => 'Nenhum livro foi criado',
    'books_popular' => 'Livros Populares',
    'books_recent' => 'Livros Recentes',
    'books_new' => 'Livros Novos',
    'books_new_action' => 'Novo Livro',
    'books_popular_empty' => 'Os livros mais populares aparecerão aqui.',
    'books_new_empty' => 'Os livros criados mais recentemente aparecerão aqui.',
    'books_create' => 'Criar Novo Livro',
    'books_delete' => 'Excluir Livro',
    'books_delete_named' => 'Excluir Livro :bookName',
    'books_delete_explain' => 'A ação vai excluir o livro com o nome \':bookName\'. Todas as páginas e capítulos serão removidos.',
    'books_delete_confirmation' => 'Você tem certeza que quer excluir o Livro?',
    'books_edit' => 'Editar Livro',
    'books_edit_named' => 'Editar Livro :bookName',
    'books_form_book_name' => 'Nome do Livro',
    'books_save' => 'Salvar Livro',
    'books_permissions' => 'Permissões do Livro',
    'books_permissions_updated' => 'Permissões do Livro Atualizadas',
    'books_empty_contents' => 'Nenhuma página ou capítulo foram criados para este livro.',
    'books_empty_create_page' => 'Criar uma nova página',
    'books_empty_sort_current_book' => 'Ordenar o livro atual',
    'books_empty_add_chapter' => 'Adicionar um capítulo',
    'books_permissions_active' => 'Permissões do Livro Ativas',
    'books_search_this' => 'Pesquisar neste livro',
    'books_navigation' => 'Navegação do Livro',
    'books_sort' => 'Ordenar Conteúdos do Livro',
    'books_sort_desc' => 'Mova capítulos e páginas de um livro para reorganizar seu conteúdo. É possível acrescentar outros livros, o que permite uma movimentação fácil de capítulos e páginas entre livros.',
    'books_sort_named' => 'Ordenar Livro :bookName',
    'books_sort_name' => 'Ordernar por Nome',
    'books_sort_created' => 'Ordenar por Data de Criação',
    'books_sort_updated' => 'Ordenar por Data de Atualização',
    'books_sort_chapters_first' => 'Capítulos Primeiro',
    'books_sort_chapters_last' => 'Capítulos por Último',
    'books_sort_show_other' => 'Mostrar Outros Livros',
    'books_sort_save' => 'Salvar Nova Ordenação',
    'books_sort_show_other_desc' => 'Adicione outros livros aqui para incluí-los na operação de ordenação e permitir a reorganização fácil de todos os livros.',
    'books_sort_move_up' => 'Mover para cima',
    'books_sort_move_down' => 'Mover para baixo',
    'books_sort_move_prev_book' => 'Mover para Livro Anterior',
    'books_sort_move_next_book' => 'Mover para o Próximo Livro',
    'books_sort_move_prev_chapter' => 'Mover para o Capítulo Anterior',
    'books_sort_move_next_chapter' => 'Mover para o Próximo Capítulo',
    'books_sort_move_book_start' => 'Mover para o Início do Livro',
    'books_sort_move_book_end' => 'Mover para o Final do Livro',
    'books_sort_move_before_chapter' => 'Mover para Antes do Capítulo',
    'books_sort_move_after_chapter' => 'Mover para Depois do Capítulo',
    'books_copy' => 'Copiar Livro',
    'books_copy_success' => 'Livro criado com sucesso',

    // Chapters
    'chapter' => 'Capítulo',
    'chapters' => 'Capítulos',
    'x_chapters' => ':count Capítulo|:count Capítulos',
    'chapters_popular' => 'Capítulos Populares',
    'chapters_new' => 'Novo Capítulo',
    'chapters_create' => 'Criar Novo Capítulo',
    'chapters_delete' => 'Excluir Capítulo',
    'chapters_delete_named' => 'Excluir Capítulo :chapterName',
    'chapters_delete_explain' => 'Isto irá excluir o capítulo com o nome \':chapterName\'. Todas as páginas que existem neste capítulo também serão excluídas.',
    'chapters_delete_confirm' => 'Tem certeza que deseja excluir o capítulo?',
    'chapters_edit' => 'Editar Capítulo',
    'chapters_edit_named' => 'Editar Capítulo :chapterName',
    'chapters_save' => 'Salvar Capítulo',
    'chapters_move' => 'Mover Capítulo',
    'chapters_move_named' => 'Mover Capítulo :chapterName',
    'chapters_copy' => 'Copiar Capítulo',
    'chapters_copy_success' => 'Página copiada com sucesso',
    'chapters_permissions' => 'Permissões do Capítulo',
    'chapters_empty' => 'Nenhuma página existente nesse capítulo.',
    'chapters_permissions_active' => 'Permissões de Capítulo Ativas',
    'chapters_permissions_success' => 'Permissões de Capítulo Atualizadas',
    'chapters_search_this' => 'Pesquisar neste Capítulo',
    'chapter_sort_book' => 'Classificar livro',

    // Pages
    'page' => 'Página',
    'pages' => 'Páginas',
    'x_pages' => ':count Página|:count Páginas',
    'pages_popular' => 'Páginas Populares',
    'pages_new' => 'Nova Página',
    'pages_attachments' => 'Anexos',
    'pages_navigation' => 'Navegação da Página',
    'pages_delete' => 'Excluir Página',
    'pages_delete_named' => 'Excluir Página :pageName',
    'pages_delete_draft_named' => 'Excluir Rascunho de Página de nome :pageName',
    'pages_delete_draft' => 'Excluir Rascunho de Página',
    'pages_delete_success' => 'Página excluída',
    'pages_delete_draft_success' => 'Rascunho de página excluído',
    'pages_delete_confirm' => 'Tem certeza que deseja excluir a página?',
    'pages_delete_draft_confirm' => 'Tem certeza que deseja excluir o rascunho de página?',
    'pages_editing_named' => 'Editando a Página :pageName',
    'pages_edit_draft_options' => 'Opções de Rascunho',
    'pages_edit_save_draft' => 'Salvar Rascunho',
    'pages_edit_draft' => 'Editar Rascunho de Página',
    'pages_editing_draft' => 'Editando Rascunho',
    'pages_editing_page' => 'Editando Página',
    'pages_edit_draft_save_at' => 'Rascunho salvo em ',
    'pages_edit_delete_draft' => 'Excluir Rascunho',
    'pages_edit_delete_draft_confirm' => 'Tem certeza que deseja excluir as alterações nas páginas de rascunho? Todas as suas alterações, desde o último salvamento completo, serão perdidas e o editor será atualizado com o último estado de salvamento da página.',
    'pages_edit_discard_draft' => 'Descartar Rascunho',
    'pages_edit_switch_to_markdown' => 'Alternar para o Editor de Markdown',
    'pages_edit_switch_to_markdown_clean' => '(Conteúdo Limpo)',
    'pages_edit_switch_to_markdown_stable' => '(Conteúdo Estável)',
    'pages_edit_switch_to_wysiwyg' => 'Alternar para o Editor WYSIWYG',
    'pages_edit_set_changelog' => 'Relatar Alterações',
    'pages_edit_enter_changelog_desc' => 'Digite uma breve descrição das alterações efetuadas por você',
    'pages_edit_enter_changelog' => 'Insira Alterações',
    'pages_editor_switch_title' => 'Trocar editor',
    'pages_editor_switch_are_you_sure' => 'Você tem certeza que deseja alterar o editor para esta página?',
    'pages_editor_switch_consider_following' => 'Considere o seguinte ao alterar editores:',
    'pages_editor_switch_consideration_a' => 'Uma vez salva, a nova opção do editor será usada por quaisquer editores futuros, incluindo aqueles que podem não ser capazes de mudar o tipo do editor.',
    'pages_editor_switch_consideration_b' => 'Isso pode levar a uma perda de detalhes e sintaxe em certas circunstâncias.',
    'pages_editor_switch_consideration_c' => 'Etiqueta ou alterações no log de mudanças, feitas desde o último salvamento, não persistem nesta alteração.',
    'pages_save' => 'Salvar Página',
    'pages_title' => 'Título da Página',
    'pages_name' => 'Nome da Página',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Pré-Visualização',
    'pages_md_insert_image' => 'Inserir Imagem',
    'pages_md_insert_link' => 'Inserir Link para Entidade',
    'pages_md_insert_drawing' => 'Inserir Desenho',
    'pages_md_show_preview' => 'Mostrar pré-visualização',
    'pages_md_sync_scroll' => 'Sincronizar pré-visualização',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Página não está dentro de um capítulo',
    'pages_move' => 'Mover Página',
    'pages_copy' => 'Copiar Página',
    'pages_copy_desination' => 'Destino da Cópia',
    'pages_copy_success' => 'Página copiada com sucesso',
    'pages_permissions' => 'Permissões da Página',
    'pages_permissions_success' => 'Permissões da Página atualizadas',
    'pages_revision' => 'Revisão',
    'pages_revisions' => 'Revisões da Página',
    'pages_revisions_desc' => 'Listadas abaixo estão todas as revisões anteriores desta página. Você pode rever, comparar e restaurar versões antigas de páginas se as permissões permitirem. O histórico completo da página pode não ser totalmente refletido aqui, pois, dependendo da configuração do sistema, as revisões antigas podem ser excluídas automaticamente.',
    'pages_revisions_named' => 'Revisões de Página para :pageName',
    'pages_revision_named' => 'Revisão de Página para :pageName',
    'pages_revision_restored_from' => 'Restaurado de #:id; :summary',
    'pages_revisions_created_by' => 'Criada por',
    'pages_revisions_date' => 'Data da Revisão',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Número de revisão',
    'pages_revisions_numbered' => 'Revisão #:id',
    'pages_revisions_numbered_changes' => 'Alterações da Revisão #:id',
    'pages_revisions_editor' => 'Tipo de editor',
    'pages_revisions_changelog' => 'Relatório de Alterações',
    'pages_revisions_changes' => 'Alterações',
    'pages_revisions_current' => 'Versão Atual',
    'pages_revisions_preview' => 'Pré-Visualização',
    'pages_revisions_restore' => 'Restaurar',
    'pages_revisions_none' => 'Essa página não tem revisões',
    'pages_copy_link' => 'Copiar Link',
    'pages_edit_content_link' => 'Ir para a seção do editor',
    'pages_pointer_enter_mode' => 'Entrar em modo de seleção de seção',
    'pages_pointer_label' => 'Opções de Seção de Página',
    'pages_pointer_permalink' => 'Seção de Página Permalink',
    'pages_pointer_include_tag' => 'Seção de Página Incluir Tag',
    'pages_pointer_toggle_link' => 'Modo permalink, pressione para mostrar a tag incluída',
    'pages_pointer_toggle_include' => 'Incluir o modo tag, pressione para mostrar permalink',
    'pages_permissions_active' => 'Permissões de Página Ativas',
    'pages_initial_revision' => 'Publicação Inicial',
    'pages_references_update_revision' => 'Atualização automática do sistema de links internos',
    'pages_initial_name' => 'Nova Página',
    'pages_editing_draft_notification' => 'Você está atualmente editando um rascunho que foi salvo da última vez em :timeDiff.',
    'pages_draft_edited_notification' => 'Essa página foi atualizada desde então. É recomendado que você descarte esse rascunho.',
    'pages_draft_page_changed_since_creation' => 'Esta página foi atualizada desde que este rascunho foi criado. É recomendável que você descarte este rascunho ou tenha cuidado para não sobrescrever nenhuma alteração de página.',
    'pages_draft_edit_active' => [
        'start_a' => ':count usuários iniciaram a edição dessa página',
        'start_b' => ':userName iniciou a edição dessa página',
        'time_a' => 'desde que a página foi atualizada pela última vez',
        'time_b' => 'nos últimos :minCount minutos',
        'message' => ':start :time. Tome cuidado para não sobrescrever atualizações de outras pessoas!',
    ],
    'pages_draft_discarded' => 'Rascunho descartado! O editor foi atualizado com o conteúdo da página atual',
    'pages_draft_deleted' => 'Rascunho excluído! O editor foi atualizado com o conteúdo da página atual',
    'pages_specific' => 'Página Específica',
    'pages_is_template' => 'Modelo de Página',

    // Editor Sidebar
    'page_tags' => 'Tags de Página',
    'chapter_tags' => 'Tags de Capítulo',
    'book_tags' => 'Tags de Livro',
    'shelf_tags' => 'Tags de Prateleira',
    'tag' => 'Tag',
    'tags' =>  'Tags',
    'tags_index_desc' => 'As tags podem ser aplicadas ao conteúdo dentro do sistema para aplicar uma forma flexível de categorização. As tags podem ter uma chave e um valor, sendo o valor opcional. Depois de aplicado, o conteúdo pode ser consultado usando o nome e o valor da tag.',
    'tag_name' =>  'Nome da Tag',
    'tag_value' => 'Valor da Tag (Opcional)',
    'tags_explain' => "Adicione algumas tags para melhor categorizar seu conteúdo. \n Você pode atribuir valores às tags para uma organização mais complexa.",
    'tags_add' => 'Adicionar outra tag',
    'tags_remove' => 'Remover essa tag',
    'tags_usages' => 'Total de marcadores usados',
    'tags_assigned_pages' => 'Atribuído às páginas',
    'tags_assigned_chapters' => 'Atribuído aos Capítulos',
    'tags_assigned_books' => 'Atribuído a Livros',
    'tags_assigned_shelves' => 'Atribuído a Prateleiras',
    'tags_x_unique_values' => ':count valores únicos',
    'tags_all_values' => 'Todos os valores',
    'tags_view_tags' => 'Ver Marcadores',
    'tags_view_existing_tags' => 'Ver tags existentes',
    'tags_list_empty_hint' => 'As tags podem ser atribuídas através da barra lateral do editor de página ou ao editar os detalhes de um livro, capítulo ou prateleira.',
    'attachments' => 'Anexos',
    'attachments_explain' => 'Faça o upload de alguns arquivos ou anexe links para serem exibidos na sua página. Eles estarão visíveis na barra lateral à direita.',
    'attachments_explain_instant_save' => 'Mudanças são salvas instantaneamente.',
    'attachments_upload' => 'Upload de Arquivos',
    'attachments_link' => 'Links Anexados',
    'attachments_upload_drop' => 'Como alternativa, você pode arrastar e soltar um arquivo aqui para enviá-lo como um anexo.',
    'attachments_set_link' => 'Definir Link',
    'attachments_delete' => 'Tem certeza de que deseja excluir esse anexo?',
    'attachments_dropzone' => 'Arraste os arquivos até aqui para fazer o upload',
    'attachments_no_files' => 'Nenhum arquivo foi enviado',
    'attachments_explain_link' => 'Você pode anexar um link se preferir não fazer o upload do arquivo. O link poderá ser para uma outra página ou para um arquivo na nuvem.',
    'attachments_link_name' => 'Nome do Link',
    'attachment_link' => 'Link para o Anexo',
    'attachments_link_url' => 'Link para o Arquivo',
    'attachments_link_url_hint' => 'URL do site ou arquivo',
    'attach' => 'Anexar',
    'attachments_insert_link' => 'Adicionar Link de Anexo à Página',
    'attachments_edit_file' => 'Editar Arquivo',
    'attachments_edit_file_name' => 'Nome do Arquivo',
    'attachments_edit_drop_upload' => 'Arraste arquivos para cá ou clique para anexar arquivos e sobrescreve-los',
    'attachments_order_updated' => 'Ordem dos anexos atualizada',
    'attachments_updated_success' => 'Detalhes dos anexos atualizados',
    'attachments_deleted' => 'Anexo excluído',
    'attachments_file_uploaded' => 'Upload de arquivo efetuado com sucesso',
    'attachments_file_updated' => 'Arquivo atualizado com sucesso',
    'attachments_link_attached' => 'Link anexado com sucesso à página',
    'templates' => 'Modelos',
    'templates_set_as_template' => 'A Página é um Modelo',
    'templates_explain_set_as_template' => 'Você pode definir esta página como um modelo para que seu conteúdo possa ser utilizado para criar outras páginas. Outros usuários poderão utilizar esta página como modelo se tiverem permissão para visualiza-la.',
    'templates_replace_content' => 'Substituir conteúdo da página',
    'templates_append_content' => 'Adicionar ao fim do conteúdo da página',
    'templates_prepend_content' => 'Adicionar ao início do conteúdo da página',

    // Profile View
    'profile_user_for_x' => 'Usuário por :time',
    'profile_created_content' => 'Conteúdo Criado',
    'profile_not_created_pages' => ':userName não criou páginas',
    'profile_not_created_chapters' => ':userName não criou capítulos',
    'profile_not_created_books' => ':userName não criou livros',
    'profile_not_created_shelves' => ':userName não criou prateleiras',

    // Comments
    'comment' => 'Comentário',
    'comments' => 'Comentários',
    'comment_add' => 'Adicionar Comentário',
    'comment_placeholder' => 'Digite seus comentários aqui',
    'comment_count' => '{0} Nenhum comentário|{1} 1 Comentário|[2,*] :count Comentários',
    'comment_save' => 'Salvar comentário',
    'comment_new' => 'Novo Comentário',
    'comment_created' => 'comentado :createDiff',
    'comment_updated' => 'Editado :updateDiff por :username',
    'comment_updated_indicator' => 'Atualizado',
    'comment_deleted_success' => 'Comentário removido',
    'comment_created_success' => 'Comentário adicionado',
    'comment_updated_success' => 'Comentário editado',
    'comment_delete_confirm' => 'Você tem certeza de que deseja excluir este comentário?',
    'comment_in_reply_to' => 'Em resposta à :commentId',
    'comment_editor_explain' => 'Aqui estão os comentários que foram deixados nesta página. Comentários podem ser adicionados e gerenciados ao visualizar a página salva.',

    // Revision
    'revision_delete_confirm' => 'Tem certeza de que deseja excluir esta revisão?',
    'revision_restore_confirm' => 'Tem certeza que deseja restaurar esta revisão? O conteúdo atual da página será substituído.',
    'revision_cannot_delete_latest' => 'Não é possível excluir a revisão mais recente.',

    // Copy view
    'copy_consider' => 'Por favor, considere o abaixo ao copiar conteúdo.',
    'copy_consider_permissions' => 'Configurações de permissão personalizada não serão copiadas.',
    'copy_consider_owner' => 'Você se tornará o proprietário de todos os conteúdos copiados.',
    'copy_consider_images' => 'A imagem da página não será duplicada e as imagens originais manterão sua relação com a página para a qual foram enviadas originalmente.',
    'copy_consider_attachments' => 'Anexos de página não serão copiados.',
    'copy_consider_access' => 'Uma alteração de localização, proprietário ou permissões pode resultar em que este conteúdo seja acessível para aqueles previamente sem acesso.',

    // Conversions
    'convert_to_shelf' => 'Converter para estante',
    'convert_to_shelf_contents_desc' => 'Você pode converter este livro em uma nova estante com o mesmo conteúdo. Os capítulos contidos neste livro serão convertidos em novos livros. Se este livro contiver quaisquer páginas que não estejam em um capítulo, este livro será renomeado e conterá tais páginas, e este livro se tornará parte da nova estante.',
    'convert_to_shelf_permissions_desc' => 'Todas as permissões definidas neste livro serão copiadas para a nova estante e para todos os novos livros filhos que não tiverem suas próprias permissões aplicadas. Observe que as permissões nas estantes não se propagam automaticamente para o conteúdo, como acontece com os livros.',
    'convert_book' => 'Converter Livro',
    'convert_book_confirm' => 'Tem certeza de que deseja converter este livro?',
    'convert_undo_warning' => 'Isso não pode ser desfeito tão facilmente.',
    'convert_to_book' => 'Converter em livro',
    'convert_to_book_desc' => 'Você pode converter este capítulo em um novo livro com o mesmo conteúdo. Quaisquer permissões definidas neste capítulo serão copiadas para o novo livro, mas quaisquer permissões herdadas, do livro pai, não serão copiadas, o que pode levar a uma alteração do controle de acesso.',
    'convert_chapter' => 'Converter capítulo',
    'convert_chapter_confirm' => 'Tem certeza de que deseja converter este capítulo?',

    // References
    'references' => 'Referências',
    'references_none' => 'Não há referências rastreadas para este item.',
    'references_to_desc' => 'Abaixo estão todas as páginas conhecidas no sistema que vinculam a este item.',

    // Watch Options
    'watch' => 'Acompanhar',
    'watch_title_default' => 'Preferências padrão',
    'watch_desc_default' => 'Reverter o acompanhamento apenas para suas preferências de notificação padrão.',
    'watch_title_ignore' => 'Ignorar',
    'watch_desc_ignore' => 'Ignorar todas as notificações, incluindo as de preferências de nível de usuário.',
    'watch_title_new' => 'Novas Páginas',
    'watch_desc_new' => 'Notificar quando qualquer nova página for criada dentro deste item.',
    'watch_title_updates' => 'Todas as atualizações da página',
    'watch_desc_updates' => 'Notificar sobre todas as novas páginas e alterações na página.',
    'watch_desc_updates_page' => 'Notificar sobre todas as alterações da página.',
    'watch_title_comments' => 'Todas as atualizações e comentários da página',
    'watch_desc_comments' => 'Notificar sobre todas as novas páginas, alterações de página e novos comentários.',
    'watch_desc_comments_page' => 'Notificar sobre alterações na página e novos comentários.',
    'watch_change_default' => 'Alterar preferências padrão de notificação',
    'watch_detail_ignore' => 'Ignorando notificações',
    'watch_detail_new' => 'Acompanhando para novas páginas',
    'watch_detail_updates' => 'Acompanhando novas páginas e atualizações',
    'watch_detail_comments' => 'Acompanhando novas páginas, atualizações e comentários',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
