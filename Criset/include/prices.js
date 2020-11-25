<script>
    btnBitcoin = document.getElementById('Bitcoin')
    btnEthereum = document.getElementById('Ethereum')
    btnLitecoin = document.getElementById('Litecoin')
    chartBitcoin = document.querySelector('.Bitcoin')
    chartEthereum = document.querySelector('.Ethereum')
    chartLitecoin = document.querySelector('.Litecoin')

    btnEthereum.addEventListener('click', (e) => {
        chartEthereum.style.display = 'block'
        chartBitcoin.style.display = 'none'
        chartLitecoin.style.display = 'none'
    })

    btnLitecoin.addEventListener('click', (e) => {
        chartLitecoin.style.display = 'block'
        chartBitcoin.style.display = 'none'
        chartEthereum.style.display = 'none'
    })

    btnBitcoin.addEventListener('click', (e) => {
        chartBitcoin.style.display = 'block'
        chartLitecoin.style.display = 'none'
        chartEthereum.style.display = 'none'
    })
</script>