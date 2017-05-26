<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
echo form_open_multipart('insert_prd');
?>
    Num serie: <input type="text" name="num_serie" value="" required /><br /><br />
    Nome: <input type="text" name="nome" value="" required /><br /><br />

    <input name="fileimg" type="file" accept="image/*"><br /><br />

    Categoria: <select name="categoria">
        <option value="1">Musica</option>
        <option value="2">Film e Serie TV</option>
        <option value="3">Videogiochi</option>
        <option value="4">Console</option>
        <option value="5">Elettronica</option>
        <option value="6">Informatica</option>
        <option value="7">Casa</option>
        <option value="8">Giardino</option>
        <option value="9">Fai da te</option>
        <option value="10">Giocattoli</option>
        <option value="11">Prima infanzia</option>
        <option value="12">Moda</option>
        <option value="13">Gioielli</option>
        <option value="14">Sport</option>
        <option value="15">Tempo libero</option>
        <option value="16">Sex toys</option>
    </select> <br /><br />

    Marca: <input type="text" name="marca" value="" required /><br /><br />
    Prezzo €: <input type="text" name="prezzo" value="" required /><br /><br />
    Prezzo Vendita €: <input type="text" name="prezzo_vend" value="" required /><br /><br />

    <p class="input_fields_wrap"></p>

    <button class="add_field_button">Add More Fields</button> <input type="submit" value="---> Aggiungi!" />
<?php echo form_close(); ?>

        <script
              src="https://code.jquery.com/jquery-2.2.4.min.js"
              integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
              crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var count = 1;
            $(".add_field_button").on('click',function(e) {
                $(".input_fields_wrap").append('Dettaglio '+count+': <input type="text" name="nome_dett[]" required ><br />Descrizione '+count+': <input type="text" name="desc_dett[]" size="50 " required><br /><hr />');
                count++;
            });
        }); 
        </script>