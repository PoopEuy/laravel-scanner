<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Cell Serial</th>
            <th>Carton Serial</th>
            <th>IR_po (uOhm)</th>
            <th>V_po (mV)</th>
            <th>K (mV/Mth)</th>
            <th>BIN</th>
            <th>V_gr</th>
            <th>IR_gr</th>
            <th>Update</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data_batt as $index => $item)
            <tr>
                <td>
                    {{ $data_batt->firstItem() + $index }}
                </td>
                <td>
                    {{ $item->cell_sern }}
                </td>
                <td>
                    {{ $item->crtn_sern }}
                </td>
                <td>
                    {{ $item->ir_po }}
                </td>
                <td>
                    {{ $item->v_po }}
                </td>
                <td>
                    {{ $item->k }}
                </td>
                <td>
                    {{ $item->bin }}
                </td>
                <td>
                    {{ $item->v_gr }}
                </td>
                <td>
                    {{ $item->ir_gr }}
                </td>
                <td>
                    {{ $item->updated_at }}
                </td>
            </tr>
        @endforeach

    </tbody>

</table>
{{ $data_batt->links() }}
