<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet
  version="1.0"
  xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0"
  xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
  xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"
  xmlns:news="http://www.google.com/schemas/sitemap-news/0.9"
  xmlns:fo="http://www.w3.org/1999/XSL/Format"
  xmlns:xhtml="http://www.w3.org/1999/xhtml"
  xmlns="http://www.w3.org/1999/xhtml">

  <xsl:output method="html" indent="yes" encoding="UTF-8"/>

  <xsl:template match="/">
<html>
<head>
<title>
<xsl:if test="sm:urlset/sm:url/mobile:mobile">Mobile </xsl:if>
<xsl:if test="sm:urlset/sm:url/image:image">Images </xsl:if>
<xsl:if test="sm:urlset/sm:url/news:news">News </xsl:if>
<xsl:if test="sm:urlset/sm:url/video:video">Video </xsl:if>
XML Sitemap
<xsl:if test="sm:sitemapindex"> Index</xsl:if>
</title>
<style type="text/css">
body {
  background-color: #DDD;
  font: normal 80%  "Trebuchet MS", "Helvetica", sans-serif;
  margin:0;
  text-align:center;
}
#cont{
  margin:auto;
  text-align:left;
}
a:link {
  color: #0180AF;
  text-decoration: underline;
}
a:hover {
  color: #666;
}
h1 {
  background-color:#fff;
  padding:20px;
  color:#00AEEF;
  text-align:left;
  font-size:32px;
  margin:0px;
}
h3 {
  font-size:12px;
  background-color:#B8DCE9;
  margin:0px;
  padding:10px;
}
h3 a {
  float:right;
  font-weight:normal;
  display:block;
}
th {
  text-align:center;
  background-color:#00AEEF;
  color:#fff;
  padding:4px;
  font-weight:normal;
  font-size:12px;
}
td{
  font-size:12px;
  padding:2px;
  text-align:left;
}
tr {background: #fff}
tr:nth-child(odd) {background: #f0f0f0}

.url2 {
  text-align:right;
}
#footer {
  background-color:#B8DCE9;
  padding:10px;
}
#prohead,#prohead a {
  float:right;
  font-weight:bold;
  line-height: 150%;
  color:#999;
  text-decoration:none;
  padding: 2px;
}

.head2 {
}

.tdinline {
  display: inline;
  margin:0px 2px;
  padding:0px 2px;
  font-style:italic;
  /*
  background:#ddd;
  border-radius:4px;
  */
}
.tdappend {
  text-align:right;
  color:#666;
}
.tdmain,tdappend {
  display:block;
  font-size:14px;
}
th {
font-size:14px;
}


@media (max-width: 640px) {
.tdmain {
  display:block;

}
.head1 {
  display:none;
}
.head2 {
  display:table-row;
}
.tdinline {
  display: inline;
}


}
</style>
</head>
<body><div id="cont">
<div id="prohead"><a href="http://pro-sitemaps.com"><span style="color:#f00">PRO</span>-sitemaps.com</a></div>
<h1>
<xsl:if test="sm:urlset/sm:url/mobile:mobile">Mobile </xsl:if>
<xsl:if test="sm:urlset/sm:url/image:image">Images </xsl:if>
<xsl:if test="sm:urlset/sm:url/news:news">News </xsl:if>
<xsl:if test="sm:urlset/sm:url/video:video">Video </xsl:if>
XML Sitemap<xsl:if test="sm:sitemapindex"> Index</xsl:if>
</h1>
<h3>

<xsl:choose>
<xsl:when  test="sm:sitemapindex">
Total sitemap files listed in this index: <xsl:value-of select="count(sm:sitemapindex/sm:sitemap)"/>
</xsl:when>
<xsl:otherwise>
Total URLs in this sitemap file: <xsl:value-of select="count(sm:urlset/sm:url)"/>
</xsl:otherwise>
</xsl:choose>
</h3>

<xsl:apply-templates />

<div id="footer">
PRO Sitemap Service
(c)2005-2017 <a href="http://pro-sitemaps.com/">PRO-Sitemaps.com</a>
</div>
</div>

</body>
</html>
  </xsl:template>


  <xsl:template match="sm:sitemapindex">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<th></th>
<th>URL /
Last Modified</th>
</tr>
<xsl:for-each select="sm:sitemap">
<tr>
<xsl:variable name="loc"><xsl:value-of select="sm:loc"/></xsl:variable>
<xsl:variable name="pno"><xsl:value-of select="position()"/></xsl:variable>
<td><xsl:value-of select="$pno"/></td>
<td>
<div class="tdmain">
<a href="{$loc}"><xsl:value-of select="sm:loc"/></a>
</div>
<div class="tdappend">
<xsl:apply-templates/>
</div>
</td>

</tr>
</xsl:for-each>
</table>
  </xsl:template>

  <xsl:template match="sm:urlset">
<table cellpadding="0" cellspacing="0" width="100%" style="max-width:100%">


<tr class="head2">
<th></th><th>URL
<xsl:if test="sm:url/sm:lastmod"> / Last Modified</xsl:if>
<xsl:if test="sm:url/sm:changefreq"> / Change Frequency</xsl:if>
<xsl:if test="sm:url/sm:priority"> / Priority</xsl:if>
</th>
</tr>

<xsl:for-each select="sm:url">
<tr>
<xsl:variable name="loc"><xsl:value-of select="sm:loc"/></xsl:variable>
<xsl:variable name="pno"><xsl:value-of select="position()"/></xsl:variable>
<td><xsl:value-of select="$pno"/></td>
<td>
<div class="tdmain"><a href="{$loc}"><xsl:value-of select="sm:loc"/></a></div>
<div class="tdappend">
<xsl:apply-templates select="sm:*"/>
</div>

</td>
</tr>
<xsl:apply-templates select="xhtml:*"/>
<xsl:apply-templates select="image:*"/>
<xsl:apply-templates select="video:*"/>
</xsl:for-each>
</table>
  </xsl:template>

<xsl:template match="sm:loc|image:loc|image:caption|video:*">
</xsl:template>

<xsl:template match="sm:lastmod|sm:changefreq|sm:priority">
<div class="tdinline">
  <xsl:apply-templates/>
</div>
</xsl:template>

  <xsl:template match="xhtml:link">
<tr>
<xsl:variable name="altloc"><xsl:value-of select="@href"/></xsl:variable>
<td><xsl:value-of select="@hreflang"/></td>
<td><div class="tdmain"><a href="{$altloc}"><xsl:value-of select="@href"/></a></div></td>
<td colspan="5"></td>
<xsl:apply-templates/>
</tr>
  </xsl:template>
  <xsl:template match="image:image">
<tr>
<xsl:variable name="loc"><xsl:value-of select="image:loc"/></xsl:variable>
<td></td>
<td class="url2">
<div class="tdmain"><a href="{$loc}"><xsl:value-of select="image:loc"/></a></div>
<div style="max-width:100%"><xsl:value-of select="image:caption"/></div></td>
<xsl:apply-templates/>
</tr>
  </xsl:template>
  <xsl:template match="video:video">
<tr>
<xsl:variable name="loc"><xsl:choose><xsl:when test="video:player_loc != ''"><xsl:value-of select="video:player_loc"/></xsl:when><xsl:otherwise><xsl:value-of select="video:content_loc"/></xsl:otherwise></xsl:choose></xsl:variable>
<xsl:variable name="thumb"><xsl:value-of select="video:thumbnail_loc"/></xsl:variable>
<td></td>
<td class="url2">
<div class="tdmain"><a href="{$loc}"><xsl:choose><xsl:when test="video:player_loc != ''"><xsl:value-of select="video:player_loc"/></xsl:when><xsl:otherwise><xsl:value-of select="video:content_loc"/></xsl:otherwise></xsl:choose></a></div>
<div style="width:100%"><xsl:value-of select="video:title"/></div>
<xsl:if test="video:thumbnail_loc != ''"><img src="{$thumb}" alt="" style="max-width:100%" /></xsl:if></td>
<xsl:apply-templates/>
</tr>
  </xsl:template>

</xsl:stylesheet>
