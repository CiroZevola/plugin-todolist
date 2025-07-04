<?php 
if ( ! class_exists( 'WP_List_Table' ) ) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

class Todolist_Products_List_Table extends WP_List_Table {
    public function get_columns() {
        return [
            'cb' => '<input type="checkbox" />', 
            'id' => 'ID',
            'title' => 'Nome tasks',
            'data' => 'Data',
            'completed' => 'Completato',
        ];
    }

     public function prepare_items() {
        $columns = $this->get_columns();
        $hidden = [];
        $sortable = [];

        $this->_column_headers = [$columns, $hidden, $sortable];

        $data = [
            ['id' => 1, 'title' => 'task A', 'data' => '12/32/2334', 'completed' => 'si'],
            ['id' => 2, 'title' => 'task B', 'data' => '10/21/2122', 'completed' => 'si'],
        ];

        $this->items = $data;
    }


    public function column_default( $item, $column_name ) {
        return $item[ $column_name ] ?? '';
    }


    public function column_cb( $item ) {
        return sprintf(
            '<input type="checkbox" name="product[]" value="%s" />',
            $item['id']
        );
    }
}
?>