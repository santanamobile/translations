<?php
/**
* @version $Id: english.php 434 2012-06-28 15:47:22Z eska $
* @package phpmygpx
* @copyright Copyright (C) 2009-2012 Sebastian Klemm.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

// no direct access
defined('_VALID_OSM') or die('Acesso negado');

DEFINE('_LANGUAGE','pt-br');
DEFINE('_TRANSLATOR_NAME', 'Helder Santana');
DEFINE('_TRANSLATOR_EMAIL', 'helder.bs.santana@gmail.com');

// Site page note found
DEFINE('_404', 'Desculpe, mas a pagina solicitada não foi encontrada.');
DEFINE('_404_RTS', 'Retornar para o site');

// common
DEFINE('_APP_NAME','phpMyGPX');
DEFINE('_APP_TITLE','gerenciamento de trackpoint');
DEFINE('_HTML_TITLE',_APP_NAME .' ::: '. _APP_TITLE);

DEFINE('_DATE_FORMAT_LC',"%Y-%m-%d"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%A, %d %B %Y %H:%M");
DEFINE('_DATE_FORMAT_LC3',"%Y-%m-%d %H:%M:%S");
DEFINE('_TIME_FORMAT_LC4',"%H:%M:%S h");

DEFINE('_NOT_AUTH','Voce não tem autorização para visualizar este recurso.');
DEFINE('_DO_LOGIN','Voce precisa fazer o login.');
DEFINE('_VALID_AZ09',"Favor entrar um válido %1%.  Sem espacos, maior que %2% caracteres e que contenha 0-9,a-z,A-Z");
DEFINE('_CMN_YES','Sim');
DEFINE('_CMN_NO','Nao');
DEFINE('_CMN_SHOW','Exibir');
DEFINE('_CMN_HIDE','Esconder');

DEFINE('_CMN_NAME','Nome');
DEFINE('_CMN_DESCRIPTION','Descrição');
DEFINE('_CMN_SAVE','Salvar');
DEFINE('_CMN_APPLY','Aplicar');
DEFINE('_CMN_CANCEL','Cancelar');
DEFINE('_CMN_PRINT','Imprimir');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','E-mail');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','Pai');
DEFINE('_CMN_ORDERING','Ordenar');
DEFINE('_CMN_ACCESS','Nível de Acesso');
DEFINE('_CMN_SELECT','Selecionar');
DEFINE('_CMN_SELECT_ALL','Selecionar todos');
DEFINE('_CMN_STATUS','Status');
DEFINE('_CMN_SEARCH_RESULTS','%1% resultado da busca:');

DEFINE('_CMN_FIRST','Primeiro');
DEFINE('_CMN_LAST','Ultimo');
DEFINE('_CMN_NEXT','Proximo');
DEFINE('_CMN_NEXT_ARROW'," &gt;&gt;");
DEFINE('_CMN_PREV','Anterior');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','Sem Ordenação');
DEFINE('_CMN_SORT_ASC','Ordenar Ascendente');
DEFINE('_CMN_SORT_DESC','Ordenar Descendente');

DEFINE('_CMN_NEW','Novo');
DEFINE('_CMN_NONE','Nenhum');
DEFINE('_CMN_LEFT','Esquerda');
DEFINE('_CMN_RIGHT','Direita');
DEFINE('_CMN_CENTER','Centro');
DEFINE('_CMN_TOP','Topo');
DEFINE('_CMN_BOTTOM','Inferior');
DEFINE('_CMN_FROM',' de ');
DEFINE('_CMN_TO',' para ');

DEFINE('_CMN_DELETE','Apagar');

DEFINE('_CMN_FOLDER','Pasta');
DEFINE('_CMN_SUBFOLDER','Sub-pasta');
DEFINE('_CMN_WRITABLE','Gravável');
DEFINE('_CMN_NOT_WRITABLE','NÃO Gravável');
DEFINE('_CMN_AVAILABLE','Disponível');
DEFINE('_CMN_MISSING','Faltando');
DEFINE('_CMN_OPTIONAL','Opcional');
DEFINE('_CMN_REQUIRED','Requerido');

DEFINE('_CMN_SCRIPT_EXEC_TIME','Página gerada em ');
DEFINE('_CMN_MOUSEOVER_FOR_TOOLTIP','Para dicas, coloque o mouse sobre o campo de digitação.');
DEFINE('_CMN_NOT_IMPLEMENTED','Este recurso ainda não foi implementado.');
DEFINE('_CMN_BACK','Voltar');
DEFINE('_CMN_CONTINUE','Continuar');
DEFINE('_CMN_WARNING','Atenção!');
DEFINE('_CMN_PAGE','Página');
DEFINE('_CMN_BATCH','Importação em lote');
DEFINE('_CMN_SINGLE_FILE','Arquivo único');
DEFINE('_CMN_MAX_FILE_SIZE','Tamanho máximo de arquivo: ');
DEFINE('_CMN_NO_ITEM_SELECTED','Nenhum item selecionado!');
DEFINE('_CMN_COPY_DATE','Data da cópia');
DEFINE('_CMN_OTHER','outro');
DEFINE('_CMN_VIEW','Ver');
DEFINE('_CMN_VIEW_SIMPLE','simples');
DEFINE('_CMN_VIEW_DETAIL','detalhado');

// error descriptions taken from http://de.php.net/manual/en/features.file-upload.errors.php
DEFINE('_CMN_UPLOAD_ERR_SIZE','O arquivo enviado excede upload_maximum.');
DEFINE('_CMN_UPLOAD_ERR_PARTIAL','O arquivo foi enviado parcialmente.');
DEFINE('_CMN_UPLOAD_ERR_NO_FILE','Nenhum arquivo enviado.');
DEFINE('_CMN_UPLOAD_ERR_NO_TMP_DIR','Falta pasta de arquivos temporários.');
DEFINE('_CMN_UPLOAD_ERR_CANT_WRITE','Falha ao escrever arquivo no disco.');

// database related errors, taken from PHP manual
DEFINE('_CMN_DB_CONNECT_ERR','Não foi possivel conectar: ');
DEFINE('_CMN_DB_SELECT_ERR','Não foi possivel selecionar o banco de dados: ');
DEFINE('_CMN_DB_QUERY_ERR','Consulta inválida: ');

DEFINE('_CMN_GEO_TAGGING','Geo-Tagging');
DEFINE('_CMN_GEO_TAGGING_MAN','Para georeferenciamento automático um arquivo GPX deve ser selecionado.');
DEFINE('_CMN_TIMEZONE','Timezone');
DEFINE('_CMN_TIMEZONE_CAM','Timezone do relógio da camera');
DEFINE('_CMN_LOCATION','Localização');
DEFINE('_CMN_BBOX','Moldura');
DEFINE('_CMN_RANGE','Intervalo');
DEFINE('_CMN_INSERTED','inserido');
DEFINE('_CMN_PUBLIC','público');
DEFINE('_CMN_VISIBLE','visível');
DEFINE('_CMN_TITLE','Titulo');
DEFINE('_CMN_ICON','Ícone');
DEFINE('_CMN_THUMB','Miniatura');
DEFINE('_CMN_PHOTO_ID','ID da Imagem');
DEFINE('_CMN_USER_ID','ID do usuário');
DEFINE('_CMN_GPX_ID','ID');
DEFINE('_CMN_BM_ID','ID Bm');
DEFINE('_CMN_BM_NAME','Nome do marcador');
DEFINE('_CMN_FILE_NAME','Nome do Arquivo');
DEFINE('_CMN_FILE_SIZE','Tamanho do Arquivo');
DEFINE('_CMN_LENGTH','Distância');
DEFINE('_CMN_COMMENT','Comentário');
DEFINE('_CMN_DATE','Data');
DEFINE('_CMN_ZOOM','Nivel de Zoom');
DEFINE('_CMN_LAT','Latitude');
DEFINE('_CMN_LON','Longitude');
DEFINE('_CMN_ALT','Altitude');
DEFINE('_CMN_VIEW_DIR','Direção da visualização');
DEFINE('_CMN_MOVE_DIR','Direção do movimento');
DEFINE('_CMN_COURSE','Curso');
DEFINE('_CMN_SPEED','Velocidade');
DEFINE('_CMN_FIX','Sat Fix');
DEFINE('_CMN_SAT','Satélites');
DEFINE('_CMN_HDOP','HDOP');
DEFINE('_CMN_PDOP','PDOP');

/** installation */
DEFINE('_INST_OSM_SETUP','phpMyGPX-Setup: ');
DEFINE('_INST_WELCOME','Bem-vindo');
DEFINE('_INST_CHECKS','Verificação de ambiente');
DEFINE('_INST_CONFIG','Configuração');
DEFINE('_INST_DB_INST','Instalação da base de dados');
DEFINE('_INST_DONE','Instalação concluída');

DEFINE('_INST_GUIDED','Voce será guiado através dos passos no processo de instalação. Basta seguir as instruções.');
DEFINE('_INST_MAN_LOGIN','
Se voce possuir <b>acesso administrativo</b> à base de dados, basta inserir a senha abaixo.<br>
Para uso futuro, uma conta de usuário com menos privilégios será criada por medidas de segurança pela rotina de instalação.
Este login será definido no arquivo de configuração.<br><br>
Se o banco de dados for <b>compartilhado</b>, provavelmente você deve ter apenas uma conta de usuário. Neste caso, utilize estes dados para <a>ambos</a>: arquivo de instalação <b>e</b> script de instalação.'); 

DEFINE('_INST_DB_ACCOUNT','Dados da conexão MySQL ');
DEFINE('_INST_DB_HOST','Hostname');
DEFINE('_INST_DB_NAME','Nome da base de dados');
DEFINE('_INST_DB_TABLE_PREFIX','Prefixo para nomes das tabelas');
DEFINE('_INST_DB_USER','Nome de usuário');
DEFINE('_INST_DB_PASSWORD','Senha');
DEFINE('_INST_DB_ROOT_ACCOUNT','Dados da conta de Root do MySQL ');
DEFINE('_INST_DB_ROOT_ACCOUNT_MAN','Se você tem <b>acesso root</b> ao banco de dados, digite usuário e senha abaixo, do contrário deixe os campos em braco.<br>
Para uso futuro, uma conta de usuário com menos privilégios será criada por medidas de segurança pela rotina de instalação.');
DEFINE('_INST_DB_ROOT','Nome do usuário root');
DEFINE('_INST_DB_ROOTPASS','Senha do root');
DEFINE('_INST_CFG_ADMIN_ACCESS','Acesso administrativo');
DEFINE('_INST_CFG_ADMIN_ACCESS_MAN','Se o servidor for de acesso público, você deve marcar este box e fornecer uma senha para administração!');
DEFINE('_INST_CFG_PUBLIC_HOST','Host com acesso público');
DEFINE('_INST_CFG_ADMIN_PASSWORD','Senha de administrador');
DEFINE('_INST_CFG_HOME_LOCATION','Local padrão');
DEFINE('_INST_CFG_HOME_LOCATION_MAN','Favor escolher uma localização no mapa (aproxime, arraste e solte o marcador à direita).');

DEFINE('_INST_LANGUAGE','Idioma');
DEFINE('_INST_LANGUAGE_CHOOSE','Escolha o idioma de preferência.');
DEFINE('_INST_MODE','Tipo de instalação');
DEFINE('_INST_MODE_NEW','Nova instalação');
DEFINE('_INST_MODE_UPGR3','Atualizar para versão 0.3');
DEFINE('_INST_MODE_UPGR_LATEST','Atualizar para última versão');
DEFINE('_INST_MODE_NEW_DESC',' (base de dados e tabelas serão criadas se não existirem)');
DEFINE('_INST_MODE_UPGR3_DESC',' (tabelas existentes serão modificadas, do contrário, serão criadas)');
DEFINE('_INST_PROG_CHECKS','Permissões de pastas e configuração do servidor serão verificadas...');
DEFINE('_INST_PROG_PHOTOS_DISABLED','Características das imagens estão desabilitadas por falta das extensões EXIF e mbstring.');
DEFINE('_INST_PROG_CHECKED','Todos os testes foram executados com sucesso.');
DEFINE('_INST_PROG_CONFIG_FOUND','Um arquivo de configuração antigo foi encontrado e seus valores serão utilizados.');
DEFINE('_INST_PROG_CONFIG_UPDATED','O arquivo de configuração foi enviado e salvo.');
DEFINE('_INST_DB_CREATE_SETUP','Criar e configurar base de dados ');
DEFINE('_INST_PROG_INST','A base de dados e tabelas serão criadas...');
DEFINE('_INST_DB_CONN_ERROR','A conexão ao banco de dados falhou. ');
DEFINE('_INST_UPGR3_ADD_BOOKM_TBL','Tabela de marcadores foi criada.');
DEFINE('_INST_UPGR3_ADD_WAYPTS_TBL','Tabela de waypoints foi criada.');
DEFINE('_INST_UPGR5_ADD_POIS_TBL','Tabela de POIs/imagens foi criada.');
DEFINE('_INST_PROG_DB','Base de dados foi criada.');
DEFINE('_INST_PROG_RENAMED','Pasta de instalação foi renomeada por medidas de segurança.');
DEFINE('_INST_PROG_RENAME_ERROR','Favor remover a pasta de instalação por medidas de segurança!');
DEFINE('_INST_PROG_DONE','<b>PARABÉNS!</b> Você instalou a aplicação com sucesso!');
DEFINE('_INST_PROG_TEST','Último teste foi realizado com sucesso.');
DEFINE('_INST_ERROR','Ocorreu um erro. Tente resolver o problema e recarregar este script!');
DEFINE('_INST_DB_ERROR','Erro na consulta: ');
DEFINE('_INST_DB_STAT','Estatisticas da base de dados ');

/** html.classes.php */
DEFINE('_MENU_GPX','Arquivo GPX');
DEFINE('_MENU_GPX_VIEW','Visualizar GPX');
DEFINE('_MENU_GPX_DETAILS','Detalhes');
DEFINE('_MENU_GPX_IMAGE','imagem');
DEFINE('_MENU_GPX_UPL','enviar GPX');
DEFINE('_MENU_GPX_BATCH_IMPORT','Importar lote de arquivos GPX');
DEFINE('_MENU_GPX_IMPORT','importar');
DEFINE('_MENU_GPX_EXPORT','exportar');
DEFINE('_MENU_GPX_DOWNL','download');
DEFINE('_MENU_GPX_EDIT','editar');
DEFINE('_MENU_GPX_DELETE','apagar');
DEFINE('_MENU_GPX_SEARCH','Buscar GPX');
DEFINE('_MENU_TRKPT','Trackpoints');
DEFINE('_MENU_TRKPT_VIEW','Visualizar Trackpoints');
DEFINE('_MENU_TRKPT_SEARCH','Buscar Trackpoints');
DEFINE('_MENU_WPT','Waypoints');
DEFINE('_MENU_WPT_VIEW','Visualizar Waypoints');
DEFINE('_MENU_WPT_CREATE','criar Waypoint');
DEFINE('_MENU_WPT_EDIT','editar Waypoint');
DEFINE('_MENU_WPT_DELETE','apagar Waypoint');
DEFINE('_MENU_WPT_SEARCH','buscar Waypoints');
DEFINE('_MENU_PHOTO','Fotos');
DEFINE('_MENU_PHOTO_VIEW','Visualizar fotos');
DEFINE('_MENU_PHOTO_DETAILS','detalhes das fotos');
DEFINE('_MENU_PHOTO_UPL','enviar fotos');
DEFINE('_MENU_PHOTO_BATCH_IMPORT','Importar lote de fotos');
DEFINE('_MENU_PHOTO_IMPORT','importar fotos');
DEFINE('_MENU_PHOTO_DELETE','apagar fotos');
DEFINE('_MENU_VIEW','Exibir');
DEFINE('_MENU_UPL','Enviar');
DEFINE('_MENU_SEARCH','Buscar');
DEFINE('_MENU_NEW','Novo');

DEFINE('_MENU_HOME','Início');
DEFINE('_MENU_ABOUT','Sobre...');
DEFINE('_MENU_BOOKMARK','Marcadores');
DEFINE('_MENU_RSS_FEED','Feeds RSS');
DEFINE('_MENU_MAP','Mapa');
DEFINE('_MENU_MISC','Geral');
DEFINE('_MENU_DB','database');
DEFINE('_MENU_DB_STAT','Estatísticas');
DEFINE('_MENU_LOGIN','LOGIN');
DEFINE('_MENU_LOGOUT','LOGOUT');

/** index.php */
DEFINE('_HOME_WELCOME_TO','Bem-vindo a ');
DEFINE('_HOME_INTRO','To do: Introdução');
DEFINE('_LOGIN_FAILED','Login falhou. Senha incorreta.');
DEFINE('_LOGIN_SUCCESS','Você foi conectado com sucesso');
DEFINE('_LOGOUT_SUCCESS','Você foi desconectado com sucesso');
DEFINE('_LOGIN_DESCRIPTION','Favor realizar login para acessar os recursos administrativos:');
#------------------------------------------------------------------------------------------------------------------------
/** traces.php */
DEFINE('_TRC_NO_WPTS_IN_DB','Nenhum waypoint(s) disponível.');
DEFINE('_TRC_NO_TRKPTS_IN_DB','Nenhum trackpoint(s) disponível.');
DEFINE('_TRC_NO_GPX_IN_DB','Nenhum arquivo GPX disponível na base de dados.');
DEFINE('_TRC_GPX_DOES_NOT_EXIST','Este arquivo GPX não existe!');
DEFINE('_TRC_DETAILS_OF_GPX','Estatísticas e detalhes do arquivo GPX # ');
DEFINE('_TRC_APPROX_DIST','distância aproximada');
DEFINE('_TRC_TRIP_TIME','tempo de viagem');
DEFINE('_TRC_AVG_SPEED','velocidade média');
DEFINE('_TRC_TRACK','Trilha ');
DEFINE('_TRC_HALT','Parada: ');
DEFINE('_TRC_TOTAL','Total');
DEFINE('_TRC_DETAILS_CHART_SPLIT','O gráfico de elevação foi dividido devido a interrupções na trilha:');
DEFINE('_TRC_SHOW_MAP','Exibir mapa');
DEFINE('_TRC_SHOW_OSM_MAP','Exibir map no OSM');
DEFINE('_TRC_SHOW_ITEMS_ON_MAP','Exibir itens selecionados no mapa');
DEFINE('_TRC_USE_DP_FOR_SEARCH','Favor digitar pontos decimais para números fracionários.');
DEFINE('_TRC_SEARCH_PARAMS_LOGIC_AND','Parâmetros de busca sao examinados com a logica AND.');
DEFINE('_TRC_CHOOSE_SEARCH_FILTER','Selecione filtro de busca: ');
DEFINE('_TRC_CHOOSE_UPL_FILE','Selecione arquivo para envio: ');
DEFINE('_TRC_BATCH_IMPORT_INFO','Para importação em lote, copie os arquivos (via FTP) para a pasta "/upload/" para continuar.');
DEFINE('_TRC_BATCH_IMPORTING_DIR','Os arquivos serão importados desta pasta: <i>"%1%"</i>');
DEFINE('_TRC_CHOOSE_FILES_FOR_BATCH_IMPORTING','Escolha os arquivos a serem importados: ');
DEFINE('_TRC_START_IMPORT','Iniciar importação em lote');
DEFINE('_TRC_WAIT_WHILE_IMPORTING','Aguarde processo de importação: ');
DEFINE('_TRC_IMPORT_DONE','Importação concluida.');
DEFINE('_TRC_MAY_TAKE_SECONDS','Isto pode demorar um pouco.');
DEFINE('_TRC_UPL_ERROR','Erro no envio do arquivo: ');
DEFINE('_TRC_UPL_SUCCESS','Arquivo enviado com sucesso: ');
DEFINE('_TRC_READING_FILE','Lendo arquivo "<i>%1%</i>"...');
DEFINE('_TRC_NO_VALID_XML','Este arquivo não está num formato XML valido!');
DEFINE('_TRC_MISS_TIMESTAMP','Impossível importar arquivo GPX devido a falta de timestamps!');
DEFINE('_TRC_DUPLICATE_FILENAME','Nome de arquivo deve ser exclusivo! Está importando novamente?');
DEFINE('_TRC_NO_UNIQUE_TIMESTAMP','Timestamps devem ser unicas! Está importando novamente?');
DEFINE('_TRC_NO_PHP_DOM_EXT','Extensao PHP DOM não está instalada!');
DEFINE('_TRC_WPTS_PROCESSED',' Waypoints processados.');
DEFINE('_TRC_TRKPTS_PROCESSED',' Trackpoints processados.');
DEFINE('_TRC_REALLY_DELETE','Voce realmente deseja APAGAR este arquivo GPX<br />e todos os track points inclusos?<br />não há como desfazer!');
DEFINE('_TRC_CONFIRM_DELETE','Para confirmar exclusão digite "Sim".');
DEFINE('_TRC_NO_CONFIRM_DELETE','Voce cancelou a exclusão.');
DEFINE('_TRC_WPT_DELETED','%1% waypoints apagados.');
DEFINE('_TRC_TRKPT_DELETED','%1% trackpoints apagados.');
DEFINE('_TRC_GPX_DELETED','%1% arquivos GPX apagados.');
DEFINE('_TRC_GPX_EDITED','Arquivo GPX editado.');
DEFINE('_TRC_EXPORT_AS_GPX','exportar arquivo no fomato GPX');

/** traces.html.php */

/** waypoints.php */
DEFINE('_WPT_CLICK_TO_CHANGE','Clique para alterar');
DEFINE('_WPT_EDIT_MAP_MAN','Mova e aproxime no mapa, em seguida marque a posição clicando no mapa.');
DEFINE('_WPT_CREATED','Waypoint criado.');
DEFINE('_WPT_EDITED','Waypoint editado.');
DEFINE('_WPT_REALLY_DELETE','Voce realmente deseja APAGAR este waypoint?<br />Não há como desfazer!');

/** bookmark.php */
DEFINE('_BOOKM_NONE_IN_DB','Nenhum marcador disponível na base de dados.');
DEFINE('_MENU_BOOKM_VIEW','Ver marcadores');
DEFINE('_MENU_BOOKM_ADD','Adicionar marcador');
DEFINE('_MENU_BOOKM_DELETE','Apagar marcador');
DEFINE('_BOOKM_ADDED','Marcador criado.');
DEFINE('_BOOKM_NO_URL','Não há URL para este marcador.');
DEFINE('_BOOKM_DELETED','Marcador apagado.');

/** photos.php */
DEFINE('_PHOTO_NONE_IN_DB','Nenhuma foto disponível.');
DEFINE('_PHOTO_DOES_NOT_EXIST','Este arquivo de foto não existe!');
DEFINE('_PHOTO_NO_PHP_GD2_EXT','A extensão PHP GD não está instalada!');
DEFINE('_PHOTO_IPTC_OBJECTNAME','Campo IPTC "title" (ObjectName)');
DEFINE('_PHOTO_IPTC_HEADLINE','Campo IPTC "headline" (Headline)');
DEFINE('_PHOTO_IPTC_CAPTION','Campo IPTC "description" (Caption/Abstract)');
DEFINE('_PHOTO_TIME_OFFSET','Time offset');
DEFINE('_PHOTO_TIME_OFFSET_MAN','Time offset [GPS - camera] em segundos');
DEFINE('_PHOTO_LOCATION_FROM_EXIF','Localização obtida através da leitura dos dados EXIF: ');
DEFINE('_PHOTO_LOCATION_FROM_TRKPT','Localização obtida através de GPX: ');
DEFINE('_PHOTO_NO_LOCATION','Não foram encontrados dados de localização na foto!');
DEFINE('_PHOTO_NO_EXIF','Nenhuma informação GPS encontrada nos dados EXIF!');
DEFINE('_PHOTO_NO_VALID_JPG','Não é um arquivo JPEG válido!');
DEFINE('_PHOTO_REALLY_DELETE','Voce realmente deseja APAGAR esta foto? <br />Não há como desfazer!');
DEFINE('_PHOTO_DELETED','Foto apagada.');

/** import.php */
DEFINE('_IMPORT_NO_AJAX','Seu navegador não possui suporte a AJAX!');
DEFINE('_IMPORT_PHP_ERROR','Desculpe, isso não deveria acontecer! Voce pode enviar um relatório de erros e incluir as seguintes linhas:');
DEFINE('_IMPORT_FILE_ERROR','Erro na abertura do arquivo!');
DEFINE('_IMPORT_COPY_FAILED','Falha na cópia deste arquivo para a pasta de destino!');
DEFINE('_IMPORT_FAILED','Falha na importação!');
DEFINE('_IMPORT_SUCCESS','Sucesso na importação!');

/** database.php */
DEFINE('_DB_GPX_AVAILABLE',' Arquivo(s) GPX encontrado(s) no banco de dados.');
DEFINE('_DB_WPTS_AVAILABLE',' waypoint(s) encontrado(s) no banco de dados.');
DEFINE('_DB_TRKPTS_AVAILABLE',' trackpoint(s) encontrado(s) no banco de dados.');
DEFINE('_DB_DAYS_AVAILABLE',' dia(s) encontrado(s) no banco de dados.');
DEFINE('_DB_BOOKM_AVAILABLE',' marcador(es) encontrado(s) no banco de dados.');
DEFINE('_DB_PHOTOS_AVAILABLE',' foto(s) encontrada(s) no banco de dados.');
DEFINE('_DB_PHOTOS_SIZE',' tamanho total dos arquivos de fotos.');
DEFINE('_DB_GPX_SIZE',' tamanho total dos arquivos GPX.');
DEFINE('_DB_TOTAL_DISTANCE',' distância total');

/** about.php */
DEFINE('_ABOUT_CREDITS','Créditos');
DEFINE('_ABOUT_LICENSE','Licença');
DEFINE('_UPDATE_CHECK_DISABLED','Verificação de atualizações desativada.');
DEFINE('_UPDATE_AVAIL','Uma atualização está disponível.');
DEFINE('_NO_UPDATE_AVAIL','Nenhuma atualização disponível.');
DEFINE('_UPDATE_SERVER_ERROR404','O servidor de atualizações retornou um erro 404 (Documento não encontrado).');
DEFINE('_UPDATE_SERVER_CONN_ERROR','A conexão ao servidor de atualizações falhou.');

/** map.php */
DEFINE('_MAP_CURRENT_AREA',' (da área do mapa atual)');
#DEFINE('_MAP_AREA_TRKPT','view all trackpoints of current map area');
DEFINE('_MAP_JOSM_EDIT','Editar com JOSM');
DEFINE('_MAP_ADD_BOOKM','Criar marcador');
DEFINE('_MAP_JS_BOOKM_NAME','Nome do marcador: ');

/** graph.php */
DEFINE('_CHART_ELEVATION_TITLE', 'Gráfico de Elevação');
DEFINE('_CHART_AXIS_ELE', 'elevação');
DEFINE('_CHART_AXIS_SPEED', 'velocidade');
DEFINE('_CHART_AXIS_TIME', 'tempo');
DEFINE('_CHART_AXIS_DIST', 'distância');

// DO NOT edit anything below this line!
include(_PATH ."version.inc.php");
?>
