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
        <form method="post" action="salvarUsuario">
            <table>
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="login" id="ilogin" maxlength="20"/></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="senha" id="isenha" maxlength="20"/></td>
                </tr>
            </table>
            <input type="submit" value="Salvar"/>
        </form>
        
        <table>
            <c:forEach items="${usuarios}" var="user">
                <tr>
                    <td><c:out value="${user.login}"></c:out></td>
                    <td><c:out value="${user.senha}"></c:out></td>
                </tr>
            </c:forEach>
        </table>
        
        <jsp:include page="rodape.jsp"/>
    </body>
</html>
