<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/03/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'ComCat Documentation - Data Products';
  $HEAD = '
    <link rel="stylesheet" href="comcat.css"/>
  ';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<!-- TABLE of CONTENTS -->

<ul>
  <li><a href="#cap">CAP Alerts</a></li>
  <li><a href="#dyfi">Did You Feel It?</a></li>
  <li><a href="#ff">Finite Fault</a></li>
  <li><a href="#fm">Focal Mechanisms</a></li>
  <li><a href="#mt">Moment Tensors</a></li>
  <li><a href="#orig">Origins</a></li>
  <li><a href="#pager">PAGER</a></li>
  <li><a href="#phase">Phase Data</a></li>
  <li><a href="#shake">ShakeMap</a></li>
</ul>

<hr/>

<!-- CONTENTS -->

<ul>
  <li id="cap">
    <h2>CAP Alerts</h2>

    <h3>What is a CAP Alert?</h3>
    <p>
    	Common Alerting Protocol is a standard XML format for alerting and notification.
    	<a href="http://www.incident.com/cookbook/index.php/CAP_Fact_Sheet">Learn more about CAP Alerts</a>.
    </p>

    <h3>Getting CAP Alerts</h3>

    <h4>FEMA IPAWS Open Platform for Emergency Networks</h4>
    <p>
    	To integrate CAP Alerts into your software, please contact
    	<a href="http://www.fema.gov/emergency/ipaws/aggregator.shtm">FEMA IPAWS Open Platform for Emergency Networks</a>,
    	which receives and distributes CAP Alerts from USGS and many other agencies.
    </p>

    <h4>ATOM Feeds</h4>
    <p>
    	We also include links to Earthquake CAP alerts in the <a href="/earthquakes/catalogs/#atom">ATOM Feeds</a>.
    	The link rel attribute is "related" and the link type attribute is "application/cap+xml":
    </p>

    <div class="code"><pre>
    &lt;entry&gt;
    &lt;id&gt;urn:earthquake-usgs-gov:ak:10329133&lt;/id&gt;
    &lt;title&gt;M 2.9, Southern Alaska&lt;/title&gt;
    &lt;updated&gt;2011-10-05T21:50:12Z&lt;/updated&gt;
    &lt;link rel=&quot;alternate&quot; type=&quot;text/html&quot; href=&quot;http://earthquake.usgs.gov/earthquakes/recenteqsww/Quakes/ak10329133.php&quot;/&gt;
    <strong>&lt;link rel=&quot;related&quot; type=&quot;application/cap+xml&quot; href=&quot;http://earthquake.usgs.gov/earthquakes/catalogs/cap/ak10329133&quot;/&gt;</strong>
    &lt;summary type=&quot;html&quot;&gt;
    &lt;![CDATA[
    &lt;img src=&quot;http://earthquake.usgs.gov/images/globes/60_-155.jpg&quot; alt=&quot;59.328&#176;N 153.646&#176;W&quot; align=&quot;left&quot; hspace=&quot;20&quot; /&gt;&lt;p&gt;Wednesday, October 5, 2011 21:50:12 UTC&lt;br&gt;Wednesday, October 5, 2011 01:50:12 PM at epicenter&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Depth&lt;/strong&gt;: 94.80 km (58.91 mi)&lt;/p&gt;
    ]]&gt;
    &lt;/summary&gt;
    &lt;georss:point&gt;59.3275 -153.6455&lt;/georss:point&gt;
    &lt;georss:elev&gt;-94800&lt;/georss:elev&gt;
    &lt;category label=&quot;Age&quot; term=&quot;Past hour&quot;/&gt;
    &lt;/entry&gt;
    </pre></div>


    <h3>Signatures</h3>
    <p>
    	We digitally sign each CAP alert so users can verify that USGS sent the alert, and the alert has not been modified since it was sent.
    	<a href="http://www.w3.org/TR/xmldsig-core/">Learn more about XML Digital Signatures</a>.
    </p>

    <h4 class="certificate">X.509 Certificate, After August 13, 2012</h4>
    <div class="code">
      <pre>
        -----BEGIN CERTIFICATE-----
MIIG9zCCBd+gAwIBAgIET3Dt3DANBgkqhkiG9w0BAQsFADCBhzELMAkGA1UEBhMCVVMxGDAWBgNV
BAoTD1UuUy4gR292ZXJubWVudDEoMCYGA1UECxMfRGVwYXJ0bWVudCBvZiBIb21lbGFuZCBTZWN1
cml0eTEiMCAGA1UECxMZQ2VydGlmaWNhdGlvbiBBdXRob3JpdGllczEQMA4GA1UECxMHREhTIENB
NDAeFw0xMjA3MDkxNDM4MTFaFw0xNTA3MDkxNTA4MTFaMIGNMQswCQYDVQQGEwJVUzEYMBYGA1UE
ChMPVS5TLiBHb3Zlcm5tZW50MSgwJgYDVQQLEx9EZXBhcnRtZW50IG9mIEhvbWVsYW5kIFNlY3Vy
aXR5MQ0wCwYDVQQLEwRGRU1BMRAwDgYDVQQLEwdEZXZpY2VzMRkwFwYDVQQDFBBJUEFXU09QRU5f
MTIwMDUyMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxpVvSZiG8aJgbJZZJB0sOkGe
GetDrQs0m/McENvtjuG3Fh8L6oMbxZ4m1aVY58kwUyeOB5UFZNC51rWEeI7q+E0LVGRniZ9RkkPO
scYRRz842NiPvKwRe9GDcvMgQTHGTXRLDaJu5skpgU6qZWLVwpnz6ZPC3b265O/PlqQAkBZDzRn/
xXRY8ZbuXH6JC03Xc5GasfsQsG5wnKljmGN37q1GdglxezsVKjpTUnv0xT0HOXToXAG454cXkq7Z
9aZ7SvdxTou/ZftkIkBG3Mw7cB2KMB8GqwTWVA/HOsn22qGMBOJbzO/2evPSqoDkx0i15RajzCNs
0u5uT0o2VR+OowIDAQABo4IDYTCCA10wDgYDVR0PAQH/BAQDAgWgMCUGA1UdIAQeMBwwDAYKYIZI
AWUDAgEDCDAMBgpghkgBZQMCAQUEMIIBGwYIKwYBBQUHAQEEggENMIIBCTA0BggrBgEFBQcwAoYo
aHR0cDovL3BraS5kaW1jLmRocy5nb3YvZGhzY2FfZWVfYWlhLnA3YzCBqgYIKwYBBQUHMAKGgZ1s
ZGFwOi8vbGRhcDAxLmRpbWMuZGhzLmdvdi9vdT1ESFMlMjBDQTQsb3U9Q2VydGlmaWNhdGlvbiUy
MEF1dGhvcml0aWVzLG91PURlcGFydG1lbnQlMjBvZiUyMEhvbWVsYW5kJTIwU2VjdXJpdHksbz1V
LlMuJTIwR292ZXJubWVudCxjPVVTP2NBQ2VydGlmaWNhdGU7YmluYXJ5MCQGCCsGAQUFBzABhhho
dHRwOi8vb2NzcC5kaW1jLmRocy5nb3YwEwYDVR0lBAwwCgYIKwYBBQUHAwEwggGTBgNVHR8EggGK
MIIBhjCCAVegggFToIIBT6SBnDCBmTELMAkGA1UEBhMCVVMxGDAWBgNVBAoTD1UuUy4gR292ZXJu
bWVudDEoMCYGA1UECxMfRGVwYXJ0bWVudCBvZiBIb21lbGFuZCBTZWN1cml0eTEiMCAGA1UECxMZ
Q2VydGlmaWNhdGlvbiBBdXRob3JpdGllczEQMA4GA1UECxMHREhTIENBNDEQMA4GA1UEAxMHQ1JM
MTMxOYaBrWxkYXA6Ly9sZGFwMDEuZGltYy5kaHMuZ292L2NuPUNSTDEzMTksb3U9REhTJTIwQ0E0
LG91PUNlcnRpZmljYXRpb24lMjBBdXRob3JpdGllcyxvdT1EZXBhcnRtZW50JTIwb2YlMjBIb21l
bGFuZCUyMFNlY3VyaXR5LG89VS5TLiUyMEdvdmVybm1lbnQsYz1VUz9jZXJ0aWZpY2F0ZVJldm9j
YXRpb25MaXN0MCmgJ6AlhiNodHRwOi8vcGtpLmRpbWMuZGhzLmdvdi9ESFNfQ0ExLmNybDAfBgNV
HSMEGDAWgBTxJDE2WMOMO9Xp58X2EzImnavTqTAdBgNVHQ4EFgQUIVkG9gUUeidV6JMvu9+ObwoZ
9eUwGQYJKoZIhvZ9B0EABAwwChsEVjcuMQMCA6gwDQYJKoZIhvcNAQELBQADggEBAG3HArYpiODo
y/C/YNp9U9PHWyqIcNHvuLERRKQ9VZj0NiZUCsWCKNkC10ap973t6g3aq2S2O26NAHEu/0+/XcdL
usqeNUI4sc3S0HSuC8mPrrEvIpLWPR814ObDmKWY9j1hNi4jKRlEenWHajaqjcuIHRjXrL+rNPYS
g2MB04gQj5R0j8Ia6Wac9i+iCl52U6GCxAyeiLSsRbl3CNfz+x0vhhJQf+Ep3SAqDM106t7JHuCh
p+11pvx6eB0Bs4l1RNwDCy619TMbOQHazcZxP7tADaBYZWTKZmXU4e8BW81d/hhF6RujAW/xRzyu
aWjdWg5DW4OBKxBgcLzUTz6xlkE=
-----END CERTIFICATE-----
      </pre>

      <h4 class="certificate">X.509 Certificate, Before August 13, 2012</h4>
      <div class="code">
        <pre>
          -----BEGIN CERTIFICATE-----
MIIG8zCCBdugAwIBAgIESn14XjANBgkqhkiG9w0BAQsFADCBhzELMAkGA1UEBhMCVVMxGDAWBgNV
BAoTD1UuUy4gR292ZXJubWVudDEoMCYGA1UECxMfRGVwYXJ0bWVudCBvZiBIb21lbGFuZCBTZWN1
cml0eTEiMCAGA1UECxMZQ2VydGlmaWNhdGlvbiBBdXRob3JpdGllczEQMA4GA1UECxMHREhTIENB
NDAeFw0xMTAzMDIxMzQzNTFaFw0xNDAzMDIxNDEzNTFaMIGgMQswCQYDVQQGEwJVUzEYMBYGA1UE
ChMPVS5TLiBHb3Zlcm5tZW50MSgwJgYDVQQLEx9EZXBhcnRtZW50IG9mIEhvbWVsYW5kIFNlY3Vy
aXR5MQ0wCwYDVQQLEwRGRU1BMRAwDgYDVQQLEwdEZXZpY2VzMSwwEQYDVQQDFApETU9QRU5fOTk5
MBcGCgmSJomT8ixkAQETCTEwMDIzMTAyOTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEB
AIqkjkhkaCSO4YPMlIoeVhTj3BLHOG2YWMENXrQUjOXmIqeKXNsa95+WjJyTgmrRVCIiQcSH6Kaf
vcOVudi76kCbLfqpH7+mVemVLvOpS1dc51yjn9dG9SbQbZGYiQPmpWhNcXfqDJs/inWEaaAGlRSj
OwpZ17teqVfWSxx7S5gHurDvjCGfrqdUPvQqhd9qyVzOHsTyqnRAQh2K89YggIwwKUcMV2+tA+ML
UBLUxfbfc95NUY5274qM1kLhf5OTM3XFWwn0SZPLN5BfqGiaJVnd7pDnxMaQUBYiEPK4rRGy1kvs
98neuoPQnV0byWVobeDFmpgzgpQWkZzShn5brQECAwEAAaOCA0owggNGMA4GA1UdDwEB/wQEAwIG
wDAlBgNVHSAEHjAcMAwGCmCGSAFlAwIBAwYwDAYKYIZIAWUDAgEFBzCCARsGCCsGAQUFBwEBBIIB
DTCCAQkwNAYIKwYBBQUHMAKGKGh0dHA6Ly9wa2kuZGltYy5kaHMuZ292L2Roc2NhX2VlX2FpYS5w
N2MwgaoGCCsGAQUFBzAChoGdbGRhcDovL2xkYXAwMS5kaW1jLmRocy5nb3Yvb3U9REhTJTIwQ0E0
LG91PUNlcnRpZmljYXRpb24lMjBBdXRob3JpdGllcyxvdT1EZXBhcnRtZW50JTIwb2YlMjBIb21l
bGFuZCUyMFNlY3VyaXR5LG89VS5TLiUyMEdvdmVybm1lbnQsYz1VUz9jQUNlcnRpZmljYXRlO2Jp
bmFyeTAkBggrBgEFBQcwAYYYaHR0cDovL29jc3AuZGltYy5kaHMuZ292MIIBkQYDVR0fBIIBiDCC
AYQwggFVoIIBUaCCAU2kgZswgZgxCzAJBgNVBAYTAlVTMRgwFgYDVQQKEw9VLlMuIEdvdmVybm1l
bnQxKDAmBgNVBAsTH0RlcGFydG1lbnQgb2YgSG9tZWxhbmQgU2VjdXJpdHkxIjAgBgNVBAsTGUNl
cnRpZmljYXRpb24gQXV0aG9yaXRpZXMxEDAOBgNVBAsTB0RIUyBDQTQxDzANBgNVBAMTBkNSTDc5
MIaBrGxkYXA6Ly9sZGFwMDEuZGltYy5kaHMuZ292L2NuPUNSTDc5MCxvdT1ESFMlMjBDQTQsb3U9
Q2VydGlmaWNhdGlvbiUyMEF1dGhvcml0aWVzLG91PURlcGFydG1lbnQlMjBvZiUyMEhvbWVsYW5k
JTIwU2VjdXJpdHksbz1VLlMuJTIwR292ZXJubWVudCxjPVVTP2NlcnRpZmljYXRlUmV2b2NhdGlv
bkxpc3QwKaAnoCWGI2h0dHA6Ly9wa2kuZGltYy5kaHMuZ292L0RIU19DQTEuY3JsMB8GA1UdIwQY
MBaAFPEkMTZYw4w71ennxfYTMiadq9OpMB0GA1UdDgQWBBS/C/4qKVG2Z5wPv92LTMa5VVYMtDAZ
BgkqhkiG9n0HQQAEDDAKGwRWNy4xAwIEsDANBgkqhkiG9w0BAQsFAAOCAQEAVyQr6kv72jG+n4Xp
/yU9782g6OEfDDkvzGTMzHfHfoA8ONBfN9cnkTzTM+yXm67n+GNkr8aOlcw2sUxgepHigWawd3i5
Q5DPCgqTQuJ1L3iJozX8eYQhOWa6VCmhL8qYZE8aInNBjXgQEApNjuYEqj4HqL3CVUQrSIVnHRI/
5aQI5YghfsIi5m1KeS6WMz7A8M1r7fs+IIIBi10bHMvD2jBnXrLhTYWFCvNKRrLLx8E54TZ31asg
CxnIsWiwExQKIL6Xc4VCOUXMh3b2EQi7VR77iheCW+SO9Q6tSXQ3eMksATI4qqVMo1gRebfQdrbA
UnG6iQei95EZ2rA/FJzurQ==
-----END CERTIFICATE-----
        </pre>

  </li>

  <li id="dyfi">
        <h2><a href="/data/dyfi/">Did You Feel It?</a></h2>
  </li>

  <li id="ff">
    <h2>Finite Fault</h2>
  </li>

  <li id="fm">
    <h2>Focal Mechanisms</h2>
    <p>
      The focal mechanism image shows a visual representation of the <a href="/learn/topics/beachball.php">style of faulting (focal mechanism)</a> derived from the estimated <a href="/learn/glossary/?term=moment%20tensor">moment tensor</a>. Shaded areas show quadrants of the focal sphere in which the P-wave first-motions are away from the source, and unshaded areas show quadrants in which the P-wave first-motions are toward the source. The dots represent the axis of maximum compressional strain (in black, called the "P-axis") and the axis of maximum extensional strain (in white, called the "T-axis") resulting from the earthquake.
    </p>
  </li>

  <li id="mt">
    <h2>Moment Tensors</h2>
    <p>
      A mathematical representation of the movement on a fault during an earthquake. The tensor depends on the source strength and fault orientation. See also <a href="/learn/topics/beachball.php">Focal Mechanisms</a>.
    </p>

    <p>
      The moment tensor image shows a visual representation of the <a href="/learn/topics/beachball.php">style of faulting (focal mechanism)</a> derived from the estimated <a href="/learn/glossary/?term=moment%20tensor">moment tensor</a>. Shaded areas show quadrants of the focal sphere in which the P-wave first-motions are away from the source, and unshaded areas show quadrants in which the P-wave first-motions are toward the source. The dots represent the axis of maximum compressional strain (in black, called the "P-axis") and the axis of maximum extensional strain (in white, called the "T-axis") resulting from the earthquake.
    </p>

    <dl class="typelist vertical">

      <dt>Mww</dt>
      <dd>
        Moment magnitude derived from a centroid moment tensor (CMT) inversion of the W-phase, a very long period phase (~100 - 1000 s) arriving at the same time as the P-wave. The W-phase is evident between the P- and Surface-waves on broadband displacement records. See http://eost.u-strasbg.fr/wphase/method.html for more details. W-phase solutions can be computed at both regional (~5 to ~20 degrees) and tele seismic (~30 to ~90 degrees) distances, though the majority of solutions are tele seismic. The distance range used is stored in the QuakeML momentTensor object “category” element.
      </dd>

      <dt>Duputel W-phase Catalog</dt>
      <dd>
        A compilation of W-phase centroid moment tensor solutions from Duputel, Rivera, Kanamori and Hayes (Geophys. J. Int. 189, 1125, 2012), and subsequent updates.
      </dd>

      <dt>US W-phase Catalog</dt>
      <dd>
        W-phase centroid moment tensor solutions computed in near real-time at the USGS NEIC.
      </dd>

      <dt>Mwc</dt>
      <dd>
        Moment magnitude derived from a centroid moment tensor inversion of full waveforms (P-wave through surface waves; US author) or long-period body waves and intermediate- to long-period surface waves (gCMT author). Inversions are performed using data at tele seismic distances (~30 to ~90 degrees). The basic methodology for both approaches is described in Dziewonski et al. ( J. Geophys. Res. 86, 2825, 1983). US-Mwc updates are discussed in Kawakatsu (J. Geophys. Res. 94, 12363, 1989), and Polet and Thio (Earth Planets Space 63, 541, 2011). gCMT updates are summarized in Ekström et al. (Phys. Ear. Planet. Int. 200-201, 1, 2012).
      </dd>

      <dt>US-Mwc Catalog (US Contributor)</dt>
      <dd>
        Surface wave centroid moment tensor solutions derived by:
        <ul>
          <li>
            USGS, following the approach of Polet and Thio (Earth Planets Space 63, 541, 2011) – identified with US author, contributor and catalog.
          </li>
          <li>
            The global (previously Harvard) Centroid Moment Tensor project (www.globalcmt.org); whose solutions have been systematically reproduced in the PDE (US contributor and catalog, gCMT or HRV author).
          </li>
        </ul>
      </dd>

      <dt>gCMT-Mwc Catalog (gCMT Contributor)</dt>
      <dd>
        Surface wave centroid moment tensor solutions directly from the gCMT project catalog (Ekström et al.), loaded by the USGS using the NDK format.
      </dd>

      <dt>Mwb</dt>
      <dd>
        Moment magnitude derived from a moment tensor inversion of long-period body-waves (P-, SH- and SR-) at tele seismic distances (~30 to ~90 degrees). The basic methodology for this approach has been modified from Sipkin (1982), and is very similar to that used for regional moment tensors (Mwr), with the exception that Mwb isolates the body-wave phases it inverts rather than using the full waveform.
      </dd>

      <dt>Mwr</dt>
      <dd>
        Moment magnitude derived from a moment tensor inversion of broadband waveforms at regional distances (RMT; distances < 13 degrees), generally used for the analysis of small to moderate size earthquakes (typically Mw 3.5-6.0). Several different approaches are used depending on the Contributor and Author of the RMT:
        <ul>
        	<li>
            US/SLU Author: This approach inverts full waveforms (P-wave through surface waves) for the deviatoric moment tensor using a time-domain inversion scheme, following the approach of Herrmann, Ammon and Benz (Bull. Seis. Soc. Amer. 101, 2609, 2011). The waveforms are interpreted in terms of regionalized models of the Earth’s velocity structure.
          </li>
          <li>
            BRK/PAL Author: Time domain full-waveform inversion of regional data (&lt; 13 degrees) for the complete moment tensor, following Minson and Dreger (Geophys. J. Int. 174, 585-, 2007) and Herrmann and Hutchensen (Tech. Rep. PL-TR-93–2070, Phillips Lab., 1993). As with US solutions, waveforms are interpreted in terms of regional (CA-based) velocity model.
          </li>
          <li>
            Other Contributors/Authors: Several other agencies also contribute regional moment tensor solutions, using techniques and velocity models that may differ from those listed above.
          </li>
        </ul>
      </dd>
    </dl>
  </li>

  <li id="orig">
    <h2>Origins</h2>
  </li>
  <li id="pager">
    <h2><a href="/data/pager/">PAGER</a></h2>
  </li>
  <li id="phase">
    <h2>Phase Data</h2>
  </li>
  <li id="shake">
    <h2><a href="/data/shakemap/">ShakeMap</a></h2>
  </li>
</ul>
