import java.util.Scanner;

public class azkiah {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("input nama: ");
        String nama = scanner.nextLine();
        System.out.print("input angka: ");
        int angka = scanner.nextInt();
        System.out.println("angka desimal: ");
        double desimal = scanner.nextDouble();
        
        System.out.println("nama: " + nama);
        System.out.println("angka: " + angka);  
        System.out.println("angka desimal: " + desimal);
    }
}
