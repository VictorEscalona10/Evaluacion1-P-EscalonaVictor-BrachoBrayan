<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suscripciones Gimnasio</title>
    <style>
        body { font-family: sans-serif; background-color: #f9f9f9; padding: 20px; }
        .container { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; }
        .card { background: white; border-radius: 8px; padding: 15px; border: 1px solid #ddd; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .card-title { font-size: 1.2rem; color: #333; margin-bottom: 10px; border-bottom: 2px solid #e2e8f0; padding-bottom: 5px; }
        .info { margin-bottom: 8px; font-size: 0.9rem; }
        .label { font-weight: bold; color: #666; }
        .no-data { grid-column: 1 / -1; background-color: #fff5f5; color: #c53030; padding: 20px; border: 1px solid #feb2b2; border-radius: 8px; text-align: center; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Gestión de Suscripciones</h1>

    <div class="container">
        @forelse($suscripciones as $s)
            <div class="card">
                <div class="card-title">{{ $s->plan }}</div>
                
                <div class="info">
                    <span class="label">Costo:</span> ${{ number_format($s->costo_mensual, 2) }}
                </div>
                
                <div class="info">
                    <span class="label">Días Máximos:</span> {{ $s->maximo_dias }} días
                </div>
                
                <div class="info">
                    <span class="label">Vencimiento:</span> {{ \Carbon\Carbon::parse($s->vencimiento)->format('d/m/Y') }}
                </div>
            </div>
        @empty
            <div class="no-data">
                No se encontraron registros en el sistema.
            </div>
        @endforelse
    </div>

</body>
</html>