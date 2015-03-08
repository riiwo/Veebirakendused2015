<?php include 'header.php';?>
<div class="container">
            <div class="contentslider">
                <h2>TULE VALIMA</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed iaculis tellus. Integer non luctus lectus, in faucibus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum egestas mi orci, nec molestie justo interdum rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget leo volutpat, ullamcorper arcu vitae, pretium odio. Proin condimentum tellus ligula, at euismod tellus commodo ac.</p>
                <a href=""><div class="custombtn1 left25">ANNA HÄÄL</div></a>
                <a href=""><div class="custombtn1 right25">ESITA KANDIDATUUR</div></a>
            </div>
            <div class="resultslider">
                <h2>HETKE TULEMUSED</h2>
                <p>Curabitur ut cursus nisl. Cras nec dignissim lorem. Curabitur auctor, leo eget pharetra placerat, velit mi tristique diam, vitae aliquam arcu orci nec odio. Mauris blandit dictum condimentum. Proin a arcu viverra, lacinia odio a, dignissim tortor. Fusce vel porttitor ipsum. Etiam quis diam nec orci sollicitudin scelerisque eu porttitor libero.</p>
                <div class="resultchart">
                    <h4>Populaarsemad erakonnad</h4>
                    
                    <div id="chart_div"></div>
                    <!--Load the AJAX API-->
                    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                    <script type="text/javascript">

                      // Load the Visualization API and the piechart package.
                      google.load('visualization', '1.0', {'packages':['corechart']});

                      // Set a callback to run when the Google Visualization API is loaded.
                      google.setOnLoadCallback(drawChart);

                      // Callback that creates and populates a data table,
                      // instantiates the pie chart, passes in the data and
                      // draws it.
                      function drawChart() {

                        // Create the data table.
                        var data = new google.visualization.DataTable();
                        data.addColumn('string', 'Topping');
                        data.addColumn('number', 'Slices');
                        data.addRows([
                          ['Orav-demokraadid', 3],
                          ['Vaba-kesklased', 1],
                          ['Sinised', 1],
                          ['Üksikkandidaat Peeter', 1],
                          ['JDS', 2]
                        ]);

                        // Set chart options
                        var options = {'title':'',
                                       'backgroundColor': '#c7e8e1',
                                       'width':"100%",
                                       'height':150};

                        // Instantiate and draw our chart, passing in some options.
                        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                        chart.draw(data, options);
                      }
                      </script>
                </div>
                <div class="resultchart">
                    <h4>Populaarsemad inimesed</h4>
                    <table>
                       <tbody>
                            <tr>
                                <td><b>Edgar Rõiv</b></td>
                                <td>5432</td>
                            </tr>
                            <tr>
                                <td><b>Andrus Savi</b></td>
                                <td>4561</td>
                            </tr>
                            <tr>
                                <td><b>Uku Hein</b></td>
                                <td>3541</td>
                            </tr>
                            <tr>
                                <td><b>Slava Käsi</b></td>
                                <td>2154</td>
                            </tr>
                            <tr>
                                <td><b>Juhan Paar</b></td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="resultchart">
                    <h4>Hetkel hääletanud</h4>
                    <p class="protsent">54%</p>
                    <p>Valisjaskonnast.</p>
                </div>
            </div>
        </div>
<?php include 'footer.php';?>
