<?php 
    include 'cabecalho.php' 
?>
        <h1>Registro de Planetas</h1>
        <form action="novo-planeta.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome do planeta</label>
                <input class="form-control input-custom" type="text" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="sist-solar">Sistema Solar</label>
                <input class="form-control input-custom" type="text" name="sistema" id="sist-solar">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="tamanho">Tamanho (em km)</label>
                        <input class="form-control input-custom" type="number" name="tamanho" id="tamanho">
                </div>
                <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Tipo</label>
                        <select class="form-control input-custom" id="exampleFormControlSelect1" name="tipo">
                        <option>Gasoso</option>
                        <option>Rochoso</option>
                        <option>Glacial</option>
                        <option>Super-Terra</option>
                        <option>Anão</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="nseresvivos">População (em milhões)</label>
                        <input class="form-control" type="number" name="nseresvivos" id="nseresvivos">
                </div>
            
            <div class="form-group col-md-6">
                    <label for="coloracao">Coloração</label>
                    <input class="form-control input-custom" type="color" name="coloracao" id="coloracao">
            </div>
            <div class="form-group col-md-6">
                    <label for="distancia">Distancia da Terra (em anos luz)</label>
                    <input class="form-control input-custom" type="number" name="distancia" id="distancia">
            </div>
            <div class="form-group col-md-6">
                <label for="foto">Foto do Planeta</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                <input class="form-control-file" type="file" name="foto" id="foto">
        </div>
</div>
            <button type="submit" class="btn btn-dark">Finalizar</button>
        </form>
    </div>
