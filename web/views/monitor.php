	<div class="container-fluid" ng-controller="MonitorController">
		<form ng-submit="submitMonitor(formMonitor.$valid)" name="formMonitor" novalidate>
			<ul class="nav nav-tabs" role="tablist" id="tabMonitorAdd">
				<li class="active" role="presentation"><a href="#general" aria-expanded="true" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
				<li role="presentation"><a href="#source" aria-controls="source" role="tab" data-toggle="tab">Source</a></li>
				<li role="presentation"><a href="#timestamp" aria-controls="timestamp" role="tab" data-toggle="tab">Timestamps</a></li>
				<li role="presentation"><a href="#buffers" aria-controls="buffers" role="tab" data-toggle="tab">Buffers</a></li>
				<li role="presentation"><a href="#misc" aria-controls="misc" role="tab" data-toggle="tab">Misc</a></li>
			</ul> <!-- End tabs -->

			<div class="tab-content">
				<section ng-include="/views/tab-monitor-general.php"></section>
				<section ng-include="/views/tab-monitor-source.php"></section>
				<section ng-include="/views/tab-monitor-timestamp.php"></section>
				<section ng-include="/views/tab-monitor-buffers.php"></section>
				<section ng-include="/views/tab-monitor-misc.php"></section>
			</div> <!-- End .tab-content -->

			<button type="submit" class="btn btn-success btn-block" ng-disabled="formMonitor.$invalid">Save</button>
		</form>
	</div> <!-- End .container-fluid -->
