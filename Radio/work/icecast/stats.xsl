<?xml version="1.0" encoding="UTF-8"?>
<!-- $Id$ -->

<xsl:stylesheet xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" version = "1.0" >
<xsl:output method="xml" version="1.0" encoding="UTF-8" omit-xml-declaration="no" standalone="yes" indent="yes" />
<xsl:template match = "/icestats" >
<stats>
<xsl:for-each select="source">
<station>
<mount>
<xsl:value-of select="@mount" />
</mount>
<onair>
<xsl:choose><xsl:when test="listeners">on</xsl:when><xsl:otherwise>off</xsl:otherwise></xsl:choose>
</onair>
<name>
<xsl:choose><xsl:when test="server_name"><xsl:value-of select="server_name" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</name>
<description>
<xsl:choose><xsl:when test="server_description"><xsl:value-of select="server_description" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</description>
<type>
<xsl:choose><xsl:when test="server_type"><xsl:value-of select="server_type" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</type>
<since>
<xsl:choose><xsl:when test="stream_start"><xsl:value-of select="stream_start" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</since>
<bitrate>
<xsl:choose><xsl:when test="bitrate"><xsl:value-of select="bitrate" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</bitrate>
<listeners>
<xsl:choose><xsl:when test="listeners"><xsl:value-of select="listeners" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</listeners>
<peak>
<xsl:choose><xsl:when test="listener_peak"><xsl:value-of select="listener_peak" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</peak>
<genre>
<xsl:choose><xsl:when test="genre"><xsl:value-of select="genre" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</genre>
<artist>
<xsl:choose><xsl:when test="artist"><xsl:value-of select="artist" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</artist>
<title>
<xsl:choose><xsl:when test="title"><xsl:value-of select="title" /></xsl:when><xsl:otherwise>n/a</xsl:otherwise></xsl:choose>
</title>
</station>
</xsl:for-each>
</stats>
</xsl:template>
</xsl:stylesheet>