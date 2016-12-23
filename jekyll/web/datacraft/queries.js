chartID = "query_chart";
chartWidth = "550";
chartHeight = "400";
chartContainer = "page_fusion_chart";

function query_enemy_kills()
{
  callback = chart_enemy_kills;
  run_sql_query("enemy_kills", callback);
}

function chart_enemy_kills(chartXml)
{
  if (request.readyState != 4) return;
  
  chartXml = request.responseText;
  
  myChart = new FusionCharts( "http://chrisw.org/web/fusioncharts/Charts/Column3D.swf", chartID, chartWidth, chartHeight, "0", "01");
  myChart.setXMLData(chartXml);
  myChart.render(chartContainer);
}

function query_player_scores()
{
  callback = chart_player_scores;
  run_sql_query("player_scores", callback);
}

function chart_player_scores(chartXml)
{
  if (request.readyState != 4) return;
  
  chartXml = request.responseText;
  
  myChart = new FusionCharts( "http://chrisw.org/web/fusioncharts/Charts/MSLine.swf", chartID, chartWidth, chartHeight, "0", "01");
  myChart.setXMLData(chartXml);
  myChart.render(chartContainer);
}

function query_enemies_on_board()
{
  callback = chart_enemies_on_board;
  run_sql_query("enemies_on_board", callback);
}

function chart_enemies_on_board(chartXml)
{
  if (request.readyState != 4) return;
  
  chartXml = request.responseText;
  
  myChart = new FusionCharts( "http://chrisw.org/web/fusioncharts/Charts/MSColumn2D.swf", chartID, chartWidth, chartHeight, "0", "01");
  myChart.setXMLData(chartXml);
  myChart.render(chartContainer);
}

function query_player_wep_freq()
{
  callback = chart_player_wep_freq
  run_sql_query("player_wep_freq", callback);
}

function chart_player_wep_freq(chartXml)
{
  if (request.readyState != 4) return;
  
  chartXml = request.responseText;
  
  myChart = new FusionCharts( "http://chrisw.org/web/fusioncharts/Charts/MSColumn2D.swf", chartID, chartWidth, chartHeight, "0", "01");
  myChart.setXMLData(chartXml);
  myChart.render(chartContainer);
}

function query_enemy_wep_freq()
{
  callback = chart_enemy_wep_freq
  run_sql_query("enemy_wep_freq", callback);
}

function chart_enemy_wep_freq(chartXml)
{
  if (request.readyState != 4) return;
  
  chartXml = request.responseText;
  
  myChart = new FusionCharts( "http://chrisw.org/web/fusioncharts/Charts/MSColumn2D.swf", chartID, chartWidth, chartHeight, "0", "01");
  myChart.setXMLData(chartXml);
  myChart.render(chartContainer);
}