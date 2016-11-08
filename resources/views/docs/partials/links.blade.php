<div class="panel panel-default panel-flush panel-md-links">
    <div class="panel-heading">
        Getting Started

        @role('admin')
        <a href="/docs/index/edit" class="btn btn-warning btn-xs pull-right"><i class="fa fa-pencil"></i> Edit</a>
        @endrole
    </div>
    {!! $index !!}
</div>

@role('admin')
<div class="panel panel-default panel-flush panel-md-links">
    <div class="panel-heading">
        Admin

        @role('admin')
        <a href="/docs/admin_index/edit" class="btn btn-warning btn-xs pull-right"><i class="fa fa-pencil"></i> Edit</a>
        @endrole
    </div>
    {!! $admin_index !!}
</div>
@endrole
