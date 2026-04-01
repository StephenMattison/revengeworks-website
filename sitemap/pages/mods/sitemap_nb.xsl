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
<html lang="en">
<head>
<title>
<xsl:if test="sm:urlset/sm:url/mobile:mobile">Mobile </xsl:if>
<xsl:if test="sm:urlset/sm:url/image:image">Images </xsl:if>
<xsl:if test="sm:urlset/sm:url/news:news">News </xsl:if>
<xsl:if test="sm:urlset/sm:url/video:video">Video </xsl:if>
XML Sitemap
<xsl:if test="sm:sitemapindex"> Index</xsl:if>
</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <style type="text/css">
  body {
    /*background-color: #fff;*/
    background: linear-gradient(90deg, #1e2025 0%, r#39404b 88%, #434b59 100%);
    font-family: "Arial Narrow", "Helvetica", "Arial", sans-serif;
    margin: 0;
  }

  #top {

    background-color: #b1d1e8;
    font-size: 16px;
    padding-bottom: 40px;
  }

  nav {
    font-size: 24px;

    margin: 0px 30px 0px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    background-color: #f3f3f3;
    color: #666;
    box-shadow: 0 10px 20px -12px rgba(0, 0, 0, 0.42), 0 3px 20px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    padding: 10px 0;
    text-align: center;
    z-index: 1;
  }

  h3 {
    margin: auto;
    padding: 10px;
    max-width: 600px;
    color: #666;
    text-align: center!important;
  }

  h3 span {
    float: right;
  }

  h3 a {
    font-weight: normal;
    display: block;
  }


  #cont {
    font-size: 18px;
    position: relative;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

    background: #f3f3f3;

    margin: -20px 30px 0px 30px;
    padding: 20px;
  }
  small {
    color: #666;
  }

  a:link,
  a:visited {
    color: #0180AF;
    text-decoration: underline;
  }

  a:hover {
    color: #666;
  }


  #footer {
    padding: 10px;
    text-align: center;
  }

  ul {
    margin: 0px;

    padding: 0px;
    list-style: none;
  }

  li {
    margin: 0px;
  }

  li ul.has-pages {
    margin-left: 20px;
  }

  .lhead {
    background: #ddd;
    color: #666;
    padding: 5px;
    margin: 2px 0px;
  }
  li ul.has-pages > .lhead {
    margin: 10px 0px;
    padding: 10px;
    color: #000;
  }

  .lcount {
    padding: 0px 10px;
  }

  .lpage {
    border-bottom: #ddd 1px solid;
    padding: 5px;
  }

  .last-page {
    border: none;
  }

  .pager {
    text-align: center;
  }

  .pager a,
  .pages span {
    padding: 10px;
    margin: 2px;
    background: #fff;
    border-radius: 10px;
      display: inline-block;
  }
  </style>
</head>
<body><div id="cont">
<h1>
<xsl:if test="sm:urlset/sm:url/mobile:mobile">Mobile </xsl:if>
<xsl:if test="sm:urlset/sm:url/image:image">Images </xsl:if>
<xsl:if test="sm:urlset/sm:url/news:news">News </xsl:if>
<xsl:if test="sm:urlset/sm:url/video:video">Video </xsl:if>
XML Sitemap<xsl:if test="sm:sitemapindex"> Index</xsl:if></h1>
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

</div>

</body>
</html>
  </xsl:template>


  <xsl:template match="sm:sitemapindex">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<th></th>
<th>URL</th>
<th>Last Modified</th>
</tr>
<xsl:for-each select="sm:sitemap">
<tr>
<xsl:variable name="loc"><xsl:value-of select="sm:loc"/></xsl:variable>
<xsl:variable name="pno"><xsl:value-of select="position()"/></xsl:variable>
<td><xsl:value-of select="$pno"/></td>
<td><a href="{$loc}"><xsl:value-of select="sm:loc"/></a></td>
<xsl:apply-templates/>
</tr>
</xsl:for-each>
</table>
  </xsl:template>

  <xsl:template match="sm:urlset">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<th></th>
<th>URL</th>
<xsl:if test="sm:url/sm:lastmod"><th>Last Modified</th></xsl:if>
<xsl:if test="sm:url/sm:changefreq"><th>Change Frequency</th></xsl:if>
<xsl:if test="sm:url/sm:priority"><th>Priority</th></xsl:if>
</tr>
<xsl:for-each select="sm:url">
<tr>
<xsl:variable name="loc"><xsl:value-of select="sm:loc"/></xsl:variable>
<xsl:variable name="pno"><xsl:value-of select="position()"/></xsl:variable>
<td><xsl:value-of select="$pno"/></td>
<td><a href="{$loc}"><xsl:value-of select="sm:loc"/></a></td>
<xsl:apply-templates select="sm:*"/>
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
<td>
  <xsl:apply-templates/>
</td>
</xsl:template>

  <xsl:template match="xhtml:link">
<tr>
<xsl:variable name="altloc"><xsl:value-of select="@href"/></xsl:variable>
<td><xsl:value-of select="@hreflang"/></td>
<td class="url2"><a href="{$altloc}"><xsl:value-of select="@href"/></a></td>
<td colspan="5"></td>
<xsl:apply-templates/>
</tr>
  </xsl:template>
  <xsl:template match="image:image">
<tr>
<xsl:variable name="loc"><xsl:value-of select="image:loc"/></xsl:variable>
<td></td>
<td class="url2"><a href="{$loc}"><xsl:value-of select="image:loc"/></a></td>
<td colspan="5"><div style="width:400px"><xsl:value-of select="image:caption"/></div></td>
<xsl:apply-templates/>
</tr>
  </xsl:template>
  <xsl:template match="video:video">
<tr>
<xsl:variable name="loc"><xsl:choose><xsl:when test="video:player_loc != ''"><xsl:value-of select="video:player_loc"/></xsl:when><xsl:otherwise><xsl:value-of select="video:content_loc"/></xsl:otherwise></xsl:choose></xsl:variable>
<xsl:variable name="thumb"><xsl:value-of select="video:thumbnail_loc"/></xsl:variable>
<td></td>
<td class="url2"><a href="{$loc}"><xsl:choose><xsl:when test="video:player_loc != ''"><xsl:value-of select="video:player_loc"/></xsl:when><xsl:otherwise><xsl:value-of select="video:content_loc"/></xsl:otherwise></xsl:choose></a></td>
<td colspan="5"><div style="width:400px"><xsl:value-of select="video:title"/></div>
<xsl:if test="video:thumbnail_loc != ''"><img src="{$thumb}" alt="" /></xsl:if></td>
<xsl:apply-templates/>
</tr>
  </xsl:template>

</xsl:stylesheet>
