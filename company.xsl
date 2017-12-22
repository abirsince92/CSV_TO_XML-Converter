<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE xsl:stylesheet  [
	<!ENTITY nbsp   "&#160;">
	<!ENTITY copy   "&#169;">
	<!ENTITY reg    "&#174;">
	<!ENTITY trade  "&#8482;">
	<!ENTITY mdash  "&#8212;">
	<!ENTITY ldquo  "&#8220;">
	<!ENTITY rdquo  "&#8221;"> 
	<!ENTITY pound  "&#163;">
	<!ENTITY yen    "&#165;">
	<!ENTITY euro   "&#8364;">
]>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="utf-8" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<xsl:template match="/company_recruitment">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<h1>companies visited in NIT DURGAPUR in 2015</h1>
<body><center>
<table border="3" width="400" height="100">
<tr><th bgcolor="#990000">name</th>
<th bgcolor="#990000">posts</th>
<th bgcolor="#990000">no_of_hiring</th>
</tr>
<xsl:for-each select="company">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="posts"/></td>
<td><xsl:value-of select="no_of_hiring"/></td>


</tr>

</xsl:for-each>

</table>
</center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
