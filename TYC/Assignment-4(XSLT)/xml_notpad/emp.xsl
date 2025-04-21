<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:template match="/">
        <html>
        <head>
            <title>Employee Details</title>
            <style>
                table {
                    width: 50%;
                    border-collapse: collapse;
                    margin: 20px 0;
                    font-family: Arial, sans-serif;
                }
                th, td {
                    border: 1px solid black;
                    padding: 10px;
                    text-align: left;
                }
                th {
                    background-color: #007bff;
                    color: white;
                }
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h2>Employee Details</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Salary</th>
                </tr>
                <xsl:for-each select="class/employee">
                    <tr>
                        <td><xsl:value-of select="@id"/></td>
                        <td><xsl:value-of select="firstname"/></td>
                        <td><xsl:value-of select="lastname"/></td>
                        <td>
                            <xsl:choose>
                                <xsl:when test="salary">
                                    <xsl:value-of select="salary"/>
                                </xsl:when>
                                <xsl:otherwise>
                                    N/A
                                </xsl:otherwise>
                            </xsl:choose>
                        </td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>