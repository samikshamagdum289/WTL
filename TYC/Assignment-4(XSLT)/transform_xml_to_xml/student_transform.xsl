<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <new_students>
            <xsl:for-each select="students/student">
                <record>
                    <studentID>
                        <xsl:value-of select="@id"/>
                    </studentID>
                    <fullName>
                        <xsl:value-of select="name"/>
                    </fullName>
                    <rollNumber>
                        <xsl:value-of select="roll_no"/>
                    </rollNumber>
                    <course>
                        <xsl:value-of select="department"/>
                    </course>
                    <specialization>
                        <xsl:value-of select="branch"/>
                    </specialization>
                </record>
            </xsl:for-each>
        </new_students>
    </xsl:template>

</xsl:stylesheet>
