<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2> My Books collection</h2>
<table border="1">
<tr bgcolor="cyan">
<th align="left">title</th>
<th align="left">author</th>
<th align="left">ISBN</th>
<th align="left">publisher</th>
<th align="left">edition</th>
<th align="left">price</th>
</tr>
<xsl:for-each select="catalog/book">
    <tr bgcolor="lightgray"> 
      <td ><xsl:value-of select="title"/></td>
      <td><xsl:value-of select="author"/></td>
      <td><xsl:value-of select="ISBN"/></td>
      <td><xsl:value-of select="publisher"/></td>
      <td><xsl:value-of select="edition"/></td>
      <td><xsl:value-of select="price"/></td> 
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
