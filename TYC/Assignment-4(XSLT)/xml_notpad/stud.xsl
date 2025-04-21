<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
        <head>
            <title>Student Details</title>
            <style>
                table {
                    width: 60%;
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
                    background-color: #28a745;
                    color: white;
                }
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h2>Student Details</h2>
            <table>
                <tr>
                    <th>Roll No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Branch</th>
                </tr>
                <xsl:for-each select="students/student">
                    <tr>
                        <td><xsl:value-of select="@roll_no"/></td>
                        <td><xsl:value-of select="firstname"/></td>
                        <td><xsl:value-of select="lastname"/></td>
                        <td><xsl:value-of select="department"/></td>
                        <td><xsl:value-of select="branch"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
