<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/student">
       <html>
          <table border="1">
             <tr>
                <th>usn</th>
                <th>name</th>
                <th>college</th>
             </tr>
             <xsl:for-each select="info">
                <tr>
                   <td><xsl:value-of select="usn"/></td>
                   <td><xsl:value-of select="name"/></td>
                   <td><xsl:value-of select="college"/></td>
                </tr>
             </xsl:for-each>
          </table>
       </html>
   </xsl:template>
</xsl:stylesheet>