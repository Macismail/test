<?xml version="1.0" encoding="UTF-8" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" doctype-public="XSLT-compat" omit-xml-declaration="yes" encoding="UTF-8" indent="yes" />

    <xsl:template match="/">
        <html>
    		<head>
				<title>Book Page</title>
			</head>
			<body>
				<form action="Update.php" method="post">
					Author: <input type="text" name="author"/><br/>
					Title: <input type="text" name="title"/><br/>
					Genre: <input type="text" name="genre"/><br/>
					Price: <input type="text" name="price"/><br/>

    			<input type="submit"/>
				</form>

				<!--1. All book titles-->
				<h2>All book titles:</h2>
			    <table border="1">
              <tr bgcolor="#9acd32">
                  <th>Title</th>
                  <th>Artist</th>
              </tr>
				<xsl:for-each select="/catalog/book">
					<tr>
					  <td><xsl:value-of select="title"/></td>
					  <td><xsl:value-of select="author"/></td>
					</tr>
				</xsl:for-each>
                </table>
				<!--2. All out of print titles-->
				<h2>Out of Print Titles:</h2>
                <ul>
                <xsl:for-each select="/catalog/book/outOfPrint">
                    <li><xsl:value-of select="../title"/></li>
                </xsl:for-each>
				</ul>
				<!--3. Fantasy book id numbers and Computer books costing more than 40-->
				<h2>Fantasy book id's :</h2>
                <xsl:for-each select="/catalog/book/genre[text()='Fantasy']">
                    <xsl:value-of select="../@id"/>,
				 </xsl:for-each>
				<!--4. Published after 2001-->
				<h2>Books published after 2001:</h2>
				<xsl:for-each select="/catalog/book/publish/publish_date[text()>'2001']">
                    <xsl:value-of select="../../title"/>
                </xsl:for-each>
				<!--5. Books costing more than 30 -->
				<h2>Books costing more than 30:</h2>
            <ol>
              <xsl:for-each select="/catalog/book/price[text()>30]">

                 <li><xsl:value-of select="../title"/>,
		            <xsl:value-of select="../price"/></li>

             </xsl:for-each>
            </ol>
			</body>
		</html>
	</xsl:template>

</xsl:transform>
