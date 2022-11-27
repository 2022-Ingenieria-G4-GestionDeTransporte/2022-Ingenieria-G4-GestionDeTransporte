<!DOCTYPE html>
    <head>
        <title>Modificar administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" type ="text/css" th:href="@{/css/style.css}"/>
    </head>
    <body >
        <div class="modificar">
            <h1>Modificar datos de administrador</h1>
            <form th:action="@{/adminitrador/administrador/editar}" method="post">
                <input type="hidden" th:value="${idAlumno}" name="idAlumno" readonly=" "/><br/>
                <label>Cedula:</label> <input type="text" name="cedula" required/> <br/>
                <label>Nombre:</label> <input type="text" name="nombre"/> <br/>
                <label>Apellidos:</label> <input type="text" name="apellidos"/> <br/>
                <label>Grado:</label> <input type="text" name="grado"/> <br/><br/>
                <label>Password:</label> <input type="text" name="password"/> <br/><br/>

                <input type="submit" value="Guardar" onclick="window.alert('Te faltan campos por llenar');"/>
            </form>
        </div>
        
    </body>

<?
