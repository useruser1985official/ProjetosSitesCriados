<%-- 
    Document   : index
    Created on : 6 de fev de 2025, 17:14:29
    Author     : eu
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE html>
<html>
    <jsp:include page="cabecalho.jsp"/>
    <body>     
        <form action="LoginServlet" method="post">
            <label for="ilogin">Login: </label>
            <input type="text" name="login" id="ilogin" size="40" maxlength="25" placeholder="Insira o Login"/>
            <br/>
            <label for="isenha">Senha: </label>
            <input type="password" name="senha" id="isenha" size="40" maxlength="15" placeholder="Até 15 Dígitos"/>
            <br/>
            <input type="submit" value="Enviar"/>
        </form>
        
        <jsp:include page="rodape.jsp"/>
    </body>
</html>
