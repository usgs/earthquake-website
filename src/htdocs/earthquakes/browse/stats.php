<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/01/2016
  if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Statistics';
      $FOOT =
          '<script src="stats.js" type="text/javascript"></script>';
      $NAVIGATION = true;
      include 'template.inc.php';
  }
?>
<noscript>
  This page requires javascript.
  Please enable javascript and refresh, or
    <a href="/earthquakes/search/">use the Earthquake Search</a>.
</noscript>

<div class="horizontal-scrolling">
  <table>

    <thead>
      <tr>
        <th>Magnitude</th>
        <th>2000</th>
        <th>2001</th>
        <th>2002</th>
        <th>2003</th>
        <th>2004</th>
        <th>2005</th>
        <th>2006</th>
        <th>2007</th>
        <th>2008</th>
        <th>2009</th>
        <th>2010</th>
        <th>2011</th>
        <th>2012</th>
        <th>2013</th>
        <th>2014</th>
        <th>2015</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th scope="row">8.0+</th>
        <td id = "2000_8.0_world">
          <!--<script>
            var options = [2000, 8.0, "2000_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id = "2001_8.0_world">
          <!--<script>
            options = [2001, 8.0, "2001_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id = "2002_8.0_world">
          <!--<script>
            options = [2002, 8.0, "2002_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2003_8.0_world">
          <!--<script>
            options = [2003, 8.0, "2003_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2004_8.0_world">
          <!--<script>
            options = [2004, 8.0, "2004_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2005_8.0_world">
          <!--<script>
            options = [2005, 8.0, "2005_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2006_8.0_world">
          <!--<script>
            options = [2006, 8.0, "2006_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2007_8.0_world">
          <!--<script>
            options = [2007, 8.0, "2007_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2008_8.0_world">
          <!--<script>
            options = [2008, 8.0, "2008_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2009_8.0_world">
          <!--<script>
            options = [2009, 8.0, "2009_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2010_8.0_world">
          <!--<script>
            options = [2010, 8.0, "2010_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2011_8.0_world">
          <!--<script>
            options = [2011, 8.0, "2011_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2012_8.0_world">
          <!--<script>
            options = [2012, 8.0, "2012_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2013_8.0_world">
          <!--<script>
            options = [2013, 8.0, "2013_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2014_8.0_world">
          <!--<script>
            options = [2014, 8.0, "2014_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2015_8.0_world">
          <!--<script>
            options = [2015, 8.0, "2015_8.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
      </tr>

      <tr>
        <th scope="row">7&ndash;7.9</th>
        <td id="2000_7.0_world">
          <!--<script>
            options = [2000, 7.0, "2000_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2001_7.0_world">
          <!--<script>
            options = [2001, 7.0, "2001_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2002_7.0_world">
          <!--<script>
            options = [2002, 7.0, "2002_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2003_7.0_world">
          <!--<script>
            options = [2003, 7.0, "2003_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2004_7.0_world">
          <!--<script>
            options = [2004, 7.0, "2004_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2005_7.0_world">
          <!--<script>
            options = [2005, 7.0, "2005_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2006_7.0_world">
          <!--<script>
            options = [2006, 7.0, "2006_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2007_7.0_world">
          <!--<script>
            options = [2007, 7.0, "2007_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2008_7.0_world">
          <!--<script>
            options = [2008, 7.0, "2008_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2009_7.0_world">
          <!--<script>
            options = [2009, 7.0, "2009_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2010_7.0_world">
          <!--<script>
            options = [2010, 7.0, "2010_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2011_7.0_world">
          <!--<script>
            options = [2011, 7.0, "2011_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2012_7.0_world">
          <!--<script>
            options = [2012, 7.0, "2012_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2013_7.0_world">
          <!--<script>
            options = [2013, 7.0, "2013_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2014_7.0_world">
          <!--<script>
            options = [2014, 7.0, "2014_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2015_7.0_world">
          <!--<script>
            options = [2015, 7.0, "2015_7.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
      </tr>

      <tr>
        <th scope="row">6&ndash;6.9</th>
        <td id="2000_6.0_world">
          <!--<script>
            options = [2000, 6.0, "2000_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2001_6.0_world">
          <!--<script>
            options = [2001, 6.0, "2001_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2002_6.0_world">
          <!--<script>
            options = [2002, 6.0, "2002_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2003_6.0_world">
          <!--<script>
            options = [2003, 6.0, "2003_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2004_6.0_world">
          <!--<script>
            options = [2004, 6.0, "2004_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2005_6.0_world">
          <!--<script>
            options = [2005, 6.0, "2005_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2006_6.0_world">
          <!--<script>
            options = [2006, 6.0, "2006_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2007_6.0_world">
          <!--<script>
            options = [2007, 6.0, "2007_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2008_6.0_world">
          <!--<script>
            options = [2008, 6.0, "2008_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2009_6.0_world">
          <!--<script>
            options = [2009, 6.0, "2009_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2010_6.0_world">
          <!--<script>
            options = [2010, 6.0, "2010_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2011_6.0_world">
          <!--<script>
            options = [2011, 6.0, "2011_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2012_6.0_world">
          <!--<script>
            options = [2012, 6.0, "2012_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2013_6.0_world">
          <!--<script>
            options = [2013, 6.0, "2013_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2014_6.0_world">
          <!--<script>
            options = [2014, 6.0, "2014_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2015_6.0_world">
          <!--<script>
            options = [2015, 6.0, "2015_6.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
      </tr>

      <tr>
        <th scope="row">5&ndash;5.9</th>
        <td id="2000_5.0_world">
          <!--<script>
            options = [2000, 5.0, "2000_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2001_5.0_world">
          <!--<script>
            options = [2001, 5.0, "2001_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2002_5.0_world">
          <!--<script>
            options = [2002, 5.0, "2002_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2003_5.0_world">
          <!--<script>
            options = [2003, 5.0, "2003_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2004_5.0_world">
          <!--<script>
            options = [2004, 5.0, "2004_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2005_5.0_world">
          <!--<script>
            options = [2005, 5.0, "2005_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2006_5.0_world">
          <!--<script>
            options = [2006, 5.0, "2006_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2007_5.0_world">
          <!--<script>
            options = [2007, 5.0, "2007_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2008_5.0_world">
          <!--<script>
            options = [2008, 5.0, "2008_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2009_5.0_world">
          <!--<script>
            options = [2009, 5.0, "2009_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2010_5.0_world">
          <!--<script>
            options = [2010, 5.0, "2010_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2011_5.0_world">
          <!--<script>
            options = [2011, 5.0, "2011_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2012_5.0_world">
          <!--<script>
            options = [2012, 5.0, "2012_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2013_5.0_world">
          <!--<script>
            options = [2013, 5.0, "2013_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2014_5.0_world">
          <!--<script>
            options = [2014, 5.0, "2014_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
        <td id="2015_5.0_world">
          <!--<script>
            options = [2015, 5.0, "2015_5.0_world"];
          </script>
          <script src="stats.js" type="text/javascript"></script>-->
        </td>
      </tr>

      <tr >
        <th scope="row">Estimated<br/>Deaths</th>
        <td>231</td><td>21357</td><td>1685</td><td>33819</td><td>298101</td>
        <td>87992</td><td>6605</td><td>708</td><td>88708</td><td>1790</td>
        <td>226050</td><td>21942</td><td>689</td><td>1572</td><td>756</td>
        <td>9624</td>
      </tr>

    </tbody>
  </table>
</div>

<h2>United States Earthquakes 2000&ndash;2012</h2>
<div class="horizontal-scrolling">
  <table>

    <thead>
      <tr>
        <th>Magnitude</th>
        <th>2000</th>
        <th>2001</th>
        <th>2002</th>
        <th>2003</th>
        <th>2004</th>
        <th>2005</th>
        <th>2006</th>
        <th>2007</th>
        <th>2008</th>
        <th>2009</th>
        <th>2010</th>
        <th>2011</th>
        <th>2012</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <th scope="row">8+</th>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

      <tr>
        <th scope="row">7&ndash;7.9</th>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>2</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
      </tr>

      <tr>
        <th scope="row">6&ndash;6.9</th>
        <td>6</td>
        <td>5</td>
        <td>4</td>
        <td>7</td>
        <td>2</td>
        <td>4</td>
        <td>7</td>
        <td>9</td>
        <td>9</td>
        <td>4</td>
        <td>8</td>
        <td>3</td>
        <td>5</td>
      </tr>

      <tr>
        <th scope="row">5&ndash;5.9</th>
        <td>63</td>
        <td>41</td>
        <td>63</td>
        <td>54</td>
        <td>25</td>
        <td>47</td>
        <td>51</td>
        <td>72</td>
        <td>85</td>
        <td>58</td>
        <td>89</td>
        <td>51</td>
        <td>27</td>
      </tr>

      <tr >
        <th scope="row">Estimated<br/>Deaths</th>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

    </tbody>
  </table>
</div>

<h2>Worldwide Earthquakes 1990&ndash;1999</h2>
<div class="horizontal-scrolling">
  <table>

  <thead>
  <tr >
  <th>Magnitude</th>
  <th>1990</th>
  <th>1991</th>
  <th>1992</th>
  <th>1993</th>
  <th>1994</th>
  <th>1995</th>
  <th>1996</th>
  <th>1997</th>
  <th>1998</th>
  <th>1999</th>
  </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row"> 8+</th>
      <td id = "1990_8.0_world"></td>
      <td id = "1991_8.0_world"></td>
      <td id = "1992_8.0_world"></td>
      <td id = "1993_8.0_world"></td>
      <td id = "1994_8.0_world"></td>
      <td id = "1995_8.0_world"></td>
      <td id = "1996_8.0_world"></td>
      <td id = "1997_8.0_world"></td>
      <td id = "1998_8.0_world"></td>
      <td id = "1999_8.0_world"></td>
    </tr>

    <tr>
      <th scope="row">7&ndash;7.9</th>
      <td id = "1990_7.0_world"></td>
      <td id = "1991_7.0_world"></td>
      <td id = "1992_7.0_world"></td>
      <td id = "1993_7.0_world"></td>
      <td id = "1994_7.0_world"></td>
      <td id = "1995_7.0_world"></td>
      <td id = "1996_7.0_world"></td>
      <td id = "1997_7.0_world"></td>
      <td id = "1998_7.0_world"></td>
      <td id = "1999_7.0_world"></td>
    </tr>

    <tr>
      <th scope="row">6&ndash;6.9</th>
      <td id = "1990_6.0_world"></td>
      <td id = "1991_6.0_world"></td>
      <td id = "1992_6.0_world"></td>
      <td id = "1993_6.0_world"></td>
      <td id = "1994_6.0_world"></td>
      <td id = "1995_6.0_world"></td>
      <td id = "1996_6.0_world"></td>
      <td id = "1997_6.0_world"></td>
      <td id = "1998_6.0_world"></td>
      <td id = "1999_6.0_world"></td>
    </tr>

    <tr>
      <th scope="row">5&ndash;5.9</th>
      <td id = "1990_5.0_world"></td>
      <td id = "1991_5.0_world"></td>
      <td id = "1992_5.0_world"></td>
      <td id = "1993_5.0_world"></td>
      <td id = "1994_5.0_world"></td>
      <td id = "1995_5.0_world"></td>
      <td id = "1996_5.0_world"></td>
      <td id = "1997_5.0_world"></td>
      <td id = "1998_5.0_world"></td>
      <td id = "1999_5.0_world"></td>
    </tr>

    <tr>
      <th scope="row">Estimated<br />Deaths</th>
      <td>52056</td><td>3210</td><td>3920</td><td>10096</td><td>1634</td>
      <td>7980</td><td>589</td><td>3069</td><td>9430</td><td>22662</td>
    </tr>

  </tbody>
</table>
</div>


<h2>United States Earthquakes 1990&ndash;1999</h2>
<div class="horizontal-scrolling">
  <table>

    <thead>
      <tr>
        <th>Magnitude </th>
        <th>1990</th>
        <th>1991</th>
        <th>1992</th>
        <th>1993</th>
        <th>1994</th>
        <th>1995</th>
        <th>1996</th>
        <th>1997</th>
        <th>1998</th>
        <th>1999</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <th scope="row">8+</th>
        <td> 0</td><td> 0</td><td> 0</td><td> 0</td><td> 0</td>
        <td> 0</td><td> 0</td><td> 0</td><td> 0</td><td> 0</td>
      </tr>

      <tr>
        <th scope="row">7&ndash;7.9</th>
        <td>0</td><td>1</td><td>2</td><td>0</td><td>1</td>
        <td>0</td><td>2</td><td>0</td><td>0</td><td>1</td>
      </tr>

      <tr >
        <th scope="row">6&ndash;6.9</th>
        <td> 2</td><td> 4</td><td>15</td><td> 9</td><td> 4</td>
        <td> 6</td><td> 4</td><td> 6</td><td> 3</td><td> 6</td>
      </tr>

      <tr>
        <th scope="row">5&ndash;5.9</th>
        <td> 64</td><td> 49</td><td> 72</td><td> 62</td><td> 64</td>
        <td> 45</td><td>100</td><td> 63</td><td> 62</td><td> 50</td>
      </tr>

      <tr>
        <th scope="row">Estimated<br />Deaths</th>
        <td>0</td><td>2</td><td>3</td><td>2</td><td>60</td>
        <td>1</td><td>0</td><td>0</td><td>0</td><td>0</td>
      </tr>

    </tbody>
  </table>
</div>

<h2>Average Annual Number of Earthquakes by Magnitude</h2>
<table>

  <tr>
    <th>Magnitude</th>
    <th>Annual Average</th>
  </tr>

  <tr>
    <td>8 and higher</td>
    <td>1 &sup1;</td>
  </tr>
  <tr>
    <td> 7 - 7.9 </td>
    <td> 17 &sup1; </td>
  </tr>
  <tr>
    <td> 6 - 6.9 </td>
    <td> 134 &sup2; </td>
  </tr>
  <tr>
    <td> 5 - 5.9 </td>
    <td> 1319 &sup2;</td>
  </tr>
  <tr>
    <td> 4 - 4.9 </td>
    <td> 13,000<br /><small>(estimated)</small></td>
  </tr>
  <tr>
    <td> 3 - 3.9 </td>
    <td> 130,000<br /><small>(estimated)</small></td>
  </tr>
  <tr>
    <td> 2 - 2.9 </td>
    <td> 1,300,000<br /><small>(estimated)</small></td>
  </tr>

  <tr>
    <td colspan="3">
      &sup1; Based on observations since 1900.
      <br />
      &sup2; Based on observations since 1990.
    </td>
  </tr>

</table>

<h2>Earthquake Counts by State 2010-2015 (M3+)</h2>
<p>Counts are as of March 10, 2016</p>

<table>
  <thead>
   <tr>
    <th>States</th>
    <th>2010</th>
    <th>2011</th>
    <th>2012</th>
    <th>2013</th>
    <th>2014</th>
    <th>2015</th>
   </tr>
 </thead>
 <tr>
  <td>Alabama</td>
  <td align=right>1</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>2</td>
  <td align=right>6</td>
 </tr>
 <tr>
  <td>Alaska</td>
  <td align=right>2245</td>
  <td align=right>1409</td>
  <td align=right>1166</td>
  <td align=right>1329</td>
  <td align=right>1296</td>
  <td align=right>1575</td>
 </tr>
 <tr>
  <td>Arizona</td>
  <td align=right>6</td>
  <td align=right>7</td>
  <td align=right>4</td>
  <td align=right>3</td>
  <td align=right>31</td>
  <td align=right>10</td>
 </tr>
 <tr>
  <td>Arkansas</td>
  <td align=right>15</td>
  <td align=right>44</td>
  <td align=right>4</td>
  <td align=right>4</td>
  <td align=right>1</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>California</td>
  <td align=right>546</td>
  <td align=right>195</td>
  <td align=right>243</td>
  <td align=right>240</td>
  <td align=right>191</td>
  <td align=right>130</td>
 </tr>
 <tr>
  <td>Colorado</td>
  <td align=right>4</td>
  <td align=right>23</td>
  <td align=right>7</td>
  <td align=right>2</td>
  <td align=right>13</td>
  <td align=right>7</td>
 </tr>
 <tr>
  <td>Connecticut</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>1</td>
 </tr>
 <tr>
  <td>Delaware</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Florida</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Georgia</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Hawaii</td>
  <td align=right>17</td>
  <td align=right>34</td>
  <td align=right>40</td>
  <td align=right>30</td>
  <td align=right>26</td>
  <td align=right>53</td>
 </tr>
 <tr>
  <td>Idaho</td>
  <td align=right>7</td>
  <td align=right>4</td>
  <td align=right>4</td>
  <td align=right>11</td>
  <td align=right>31</td>
  <td align=right>38</td>
 </tr>
 <tr>
  <td>Illinois</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>2</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>1</td>
 </tr>
 <tr>
  <td>Indiana</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>3</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Iowa</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Kansas</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>2</td>
  <td align=right>42</td>
  <td align=right>60</td>
 </tr>
 <tr>
  <td>Kentucky</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>2</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Louisiana</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Maine</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Maryland</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Massachusetts</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Michigan</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>2</td>
 </tr>
 <tr>
  <td>Minnesota</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Mississippi</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>3</td>
 </tr>
 <tr>
  <td>Missouri</td>
  <td align=right>2</td>
  <td align=right>3</td>
  <td align=right>2</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>5</td>
 </tr>
 <tr>
  <td>Montana</td>
  <td align=right>7</td>
  <td align=right>11</td>
  <td align=right>9</td>
  <td align=right>14</td>
  <td align=right>29</td>
  <td align=right>19</td>
 </tr>
 <tr>
  <td>Nebraska</td>
  <td align=right>2</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>3</td>
 </tr>
 <tr>
  <td>Nevada</td>
  <td align=right>38</td>
  <td align=right>86</td>
  <td align=right>22</td>
  <td align=right>34</td>
  <td align=right>161</td>
  <td align=right>172</td>
 </tr>
 <tr>
  <td>New Hampshire</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>New Jersey</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>New Mexico</td>
  <td align=right>7</td>
  <td align=right>7</td>
  <td align=right>3</td>
  <td align=right>6</td>
  <td align=right>3</td>
  <td align=right>12</td>
 </tr>
 <tr>
  <td>New York</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>2</td>
 </tr>
 <tr>
  <td>North Carolina</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>North Dakota</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Ohio</td>
  <td align=right>1</td>
  <td align=right>3</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>1</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Oklahoma</td>
  <td align=right>41</td>
  <td align=right>63</td>
  <td align=right>34</td>
  <td align=right>103</td>
  <td align=right>585</td>
  <td align=right>888</td>
 </tr>
 <tr>
  <td>Oregon</td>
  <td align=right>4</td>
  <td align=right>0</td>
  <td align=right>4</td>
  <td align=right>2</td>
  <td align=right>4</td>
  <td align=right>3</td>
 </tr>
 <tr>
  <td>Pennsylvania</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Rhode Island</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>South Carolina</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>3</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>South Dakota</td>
  <td align=right>0</td>
  <td align=right>3</td>
  <td align=right>1</td>
  <td align=right>1</td>
  <td align=right>1</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Tennessee</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>4</td>
  <td align=right>1</td>
  <td align=right>1</td>
  <td align=right>1</td>
 </tr>
 <tr>
  <td>Texas</td>
  <td align=right>9</td>
  <td align=right>18</td>
  <td align=right>11</td>
  <td align=right>16</td>
  <td align=right>8</td>
  <td align=right>21</td>
 </tr>
 <tr>
  <td>Utah</td>
  <td align=right>17</td>
  <td align=right>16</td>
  <td align=right>16</td>
  <td align=right>6</td>
  <td align=right>10</td>
  <td align=right>4</td>
 </tr>
 <tr>
  <td>Vermont</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Virginia</td>
  <td align=right>1</td>
  <td align=right>7</td>
  <td align=right>4</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Washington</td>
  <td align=right>5</td>
  <td align=right>14</td>
  <td align=right>6</td>
  <td align=right>18</td>
  <td align=right>6</td>
  <td align=right>11</td>
 </tr>
 <tr>
  <td>West Virginia</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>1</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Wisconsin</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
  <td align=right>0</td>
 </tr>
 <tr>
  <td>Wyoming</td>
  <td align=right>43</td>
  <td align=right>6</td>
  <td align=right>9</td>
  <td align=right>73</td>
  <td align=right>179</td>
  <td align=right>198</td>
 </tr>
</table>
