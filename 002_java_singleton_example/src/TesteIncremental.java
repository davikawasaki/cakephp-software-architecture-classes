public class TesteIncremental {
    public static void main(String[] args) {
        for (int i = 0; i < 10; i++) {
            IncrementalSingleton incs = IncrementalSingleton.getInstance();
            System.out.println(incs);
        }
    }
}
