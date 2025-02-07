<%-- 
    Document   : teste
    Created on : 6 de fev de 2025, 17:35:28
    Author     : eu
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Página JSP</title>
    </head>
    <body>
        <jsp:useBean id="calcula" class="beans.CursoJSPBean" type="beans.CursoJSPBean" scope="page"/>
        
        <%= calcula.calcula(50) %>
    </body>
</html>
