<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
        <head>
            <title>Library Books</title>
            <style>
                table {
                    width: 70%;
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
            <h2>Library Books</h2>
            <table>
                <tr>
                    <th>Sr. No.</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Price (₹)</th>
                    <th>Year</th>
                    <th>Rating</th>
                </tr>
                <xsl:for-each select="library/book">
                    <tr>
                        <td><xsl:value-of select="@sr_no"/></td>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="author"/></td>
                        <td><xsl:value-of select="price"/></td>
                        <td><xsl:value-of select="year"/></td>
                        <td><xsl:value-of select="rating"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
