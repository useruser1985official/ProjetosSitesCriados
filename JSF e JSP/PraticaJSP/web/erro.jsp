<%-- 
    Document   : erro
    Created on : 6 de fev de 2025, 17:49:57
    Author     : eu
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Prática JSP</title>
    </head>
    <body>
        <%@ page isErrorPage="true" %>
        
        <%= exception %>
    </body>
</html>
