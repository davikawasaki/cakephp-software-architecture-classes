class IncrementalSingleton {
    private static int count = 0;
    private int numero;
    private static IncrementalSingleton instance;

    public static IncrementalSingleton getInstance() {
        if (instance == null) instance = new IncrementalSingleton();
        else instance.increment();
        return instance;
    }

    protected IncrementalSingleton() {
        increment();
    }

    private void increment() {
        numero = ++count;
    }

    public String toString() {
        return "Incremental " + numero;
    }
}
