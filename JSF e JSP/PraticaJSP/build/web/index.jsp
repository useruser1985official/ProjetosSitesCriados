<%-- 
    Document   : index
    Created on : 6 de fev de 2025, 17:14:29
    Author     : eu
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <jsp:include page="cabecalho.jsp"/>
    <body>
        <jsp:forward page="teste.jsp">
            <jsp:param name="paramforward" value="Curso de JSP"/>
        </jsp:forward>
        
        <jsp:include page="rodape.jsp"/>
    </body>
</html>
