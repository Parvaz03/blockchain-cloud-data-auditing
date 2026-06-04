<%@ page import="java.sql.*" %>

<%
String url="jdbc:mysql://localhost:3306/cloud_audit";
Class.forName("com.mysql.jdbc.Driver");
Connection Con=DriverManager.getConnection(url,"root","");
Statement stmt=Con.createStatement();
%>