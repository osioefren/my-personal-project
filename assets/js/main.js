document.addEventListener('DOMContentLoaded', () => {
    // For handling the table hover
    const crudTable = document.querySelector('.crud-table table');

    if (!crudTable) {
        console.log("Table with ID 'crud-table' not found!");
        return;
    }

    const highLightTableColumn = (ev, changes1, changes2) => {
        changes1 = changes1 || '';
        changes2 = changes2 || '';
        crudTable.addEventListener(ev, (e) => {
            if (e.target.tagName === 'TD' || e.target.tagName === 'TH') {
                const columnIndex = e.target.cellIndex;
                highlightColumn(columnIndex, changes1, changes2);
            }
        });
    };

    const highlightColumn = (index, color1, color2) => {
        color1 = color1 || '';
        color2 = color2 || '';
        const rows = crudTable.rows;
        if (!rows || rows.length === 0) {
            console.error('No rows found in the table.');
            return;
        }

        for (let row of rows) {
            row.cells[index].style.backgroundColor = color1;
            
        }

        const headerCell = crudTable.querySelector(`thead th:nth-child(${index + 1}) h6`);
        if (headerCell) {
            headerCell.style.color = color2;
        }
    }

    highLightTableColumn('mouseover', 'var(--yellow2)', 'var(--gray1)');
    highLightTableColumn('mouseout', '', '');
    // End handling the table hover

});