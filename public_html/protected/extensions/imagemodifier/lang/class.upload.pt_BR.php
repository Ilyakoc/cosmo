<?php
// +------------------------------------------------------------------------+
// | class.upload.pt_BR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Fernando Binasco 2007. All rights reserved.              |
// | Version       0.25                                                     |
// | Last modified 17/11/2007                                               |
// | Email         jorge@cocoroto.com                                       |
// | Web           http://www.cocoroto.com                                  |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

/**
 * Class upload brazilian portugese translation
 *
 * @version   0.25
 * @author    Fernando Binasco
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Fernando Binasco
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Erro de transmiss??o. Favor tentar novamente.';
    $translation['local_file_missing']          = 'O arquivo local n??o existe.';
    $translation['local_file_not_readable']     = 'N??o foi poss??vel ler o arquivo local.';
    $translation['uploaded_too_big_ini']        = 'Erro ao carregar o arquivo (o arquivo carregado excede a directiva upload_max_filesize em php.ini).';
    $translation['uploaded_too_big_html']       = 'Erro ao carregar o arquivo (o arquivo carregado excede a directiva MAX_FILE_SIZE especificado no formulario html).';
    $translation['uploaded_partial']            = 'Erro ao carregar o arquivo (o arquivo s?? foi carregado parcialmente).';
    $translation['uploaded_missing']            = 'Erro ao carregar o arquivo (o arquivo n??o foi carregado).';
    $translation['uploaded_unknown']            = 'Erro ao carregar o arquivo (c??digo de erro desconhecido).';
    $translation['try_again']                   = 'Erro ao carregar o arquivo. Favor tentar novamente.';
    $translation['file_too_big']                = 'Arquivo muito grande.';
    $translation['no_mime']                     = 'MIME type n??o detectado.';
    $translation['incorrect_file']              = 'Tipo de arquivo incorreto.';
    $translation['image_too_wide']              = 'A imagem ?? muito larga.';
    $translation['image_too_narrow']            = 'A imagem ?? muito estreita.';
    $translation['image_too_high']              = 'A imagem ?? muito alta.';
    $translation['image_too_short']             = 'A imagem ?? muito curto.';
    $translation['ratio_too_high']              = 'O ratio ?? muito alto (Imagem muito larga).';
    $translation['ratio_too_low']               = 'O ratio ?? muito baixo (Imagem muito alta).';
    $translation['too_many_pixels']             = 'A imagem tem muitos pixels.';
    $translation['not_enough_pixels']           = 'A imagem tem poucos pixels.';
    $translation['file_not_uploaded']           = 'O arquivo n??o foi transmitido. Imposs??vel continuar.';
    $translation['already_exists']              = '%s Ja existe. Favor mudar o nome do arquivo.';
    $translation['temp_file_missing']           = 'O arquivo fonte ?? incorreto. Imposs??vel continuar.';
    $translation['source_missing']              = 'O arquivo transmitido ?? incorreto. Imposs??vel continuar.';
    $translation['destination_dir']             = 'O diret??rio de destino n??o pode ser criado. Imposs??vel continuar.';
    $translation['destination_dir_missing']     = 'O diret??rio de destino n??o existe. Imposs??vel continuar.';
    $translation['destination_path_not_dir']    = 'O path especificado n??o ?? um diret??rio. Imposs??vel continuar.';
    $translation['destination_dir_write']       = 'Directorio de destino, sem permiss??o para editar. Imposs??vel continuar.';
    $translation['destination_path_write']      = 'O path de destino n??o tem permiss??o de escrita ou n??o pode ser aberto. Imposs??vel continuar.';
    $translation['temp_file']                   = 'N??o foi poss??vel criar o arquivo tempor??rio. Imposs??vel continuar.';
    $translation['source_not_readable']         = 'O arquivo fonte n??o ?? leg??vel. Imposs??vel continuar.';
    $translation['no_create_support']           = 'Cria????o a partir do arquivo %s impos??vel...';
    $translation['create_error']                = 'Erro na cria????o da imagem %s desde o c??digo fonte.';
    $translation['source_invalid']              = 'Imposs??vel ler a imagem fonte. ?? uma imagem?.';
    $translation['gd_missing']                  = 'GD n??o parece estar presente.';
    $translation['watermark_no_create_support'] = 'Cria????o a partir do arquivo %s imposs??vel, watermark n??o pode ser lido.';
    $translation['watermark_create_error']      = 'Erro no momento da cria????o do watermark %s desde o arquivo fonte.';
    $translation['watermark_invalid']           = 'Imposs??vel ler o watermark, formato de arquivo desconhecido.';
    $translation['file_create']                 = 'Cria????o do arquivo %s imposs??vel.';
    $translation['no_conversion_type']          = 'Tipo de convers??o n??o foi definida.';
    $translation['copy_failed']                 = 'Erro ao copiar o arquivo no servidor. copy() falhou.';
    $translation['reading_failed']              = 'Erro ao ler o arquivo.';

?>
